<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.serverKey');
        $hashedKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashedKey !== $request->signature_key) {
            return response()->json([
                'message' => 'Invalid signature key',
            ], 403);
        }

        $transactionStatus = $request->transaction_status;
        $orderID = $request->order_id;
        $transaction = Transaction::where('code', $orderID)->first();

        if (!$transaction) {
            return response()->json([
                'message' => 'Transaction not found',
            ], 404);
        }

        $sid    = config('twilio.twilio_sid');
        $token  = config('twilio.twilio_token');
        $twilio = new Client($sid, $token);

        $message =
            "Halo, " . $transaction->name . "!" . PHP_EOL .
            "Kami telah menerima pembayaran untuk pembelian anda dengan kode booking: " . $transaction->code . "." . PHP_EOL .
            "Total Pembayaran: Rp " . number_format($transaction->total_amount, 0, ',', '.') . "." . PHP_EOL . PHP_EOL .
            "Anda bisa datang ke kos: " . $transaction->boardingHouse->name . PHP_EOL .
            "Alamat: " . $transaction->boardingHouse->address . PHP_EOL .
            "Mulai tanggal: " . date('d-m-Y', strtotime($transaction->start_date)) . PHP_EOL . PHP_EOL .
            "Terima kasih sudah menggunakan aplikasi kami🏘️" . PHP_EOL .
            "Kami tunggu kedatangan anda.";;

        try {
            if (in_array($request->transaction_status, ['capture', 'settlement'])) {
                $transaction->update(['payment_status' => 'success']);
                // Menghapus angka 0 di awal nomor telepon jika ada
                $phoneNumber = ltrim($transaction->phone_number, '0');

                // Menambahkan kode negara +62 di depan nomor telepon
                $formattedPhoneNumber = "+62{$phoneNumber}";

                // Mengirim pesan WhatsApp menggunakan Twilio
                $twilio->messages->create(
                    "whatsapp:{$formattedPhoneNumber}",
                    [
                        "from" => "whatsapp:+14155238886",
                        'body' => $message,
                    ]
                );
            } elseif ($request->transaction_status === 'cancel') {
                $transaction->update(['payment_status' => 'canceled']);
            } elseif ($request->transaction_status === 'deny') {
                $transaction->update(['payment_status' => 'failed']);
            } elseif ($request->transaction_status === 'expire') {
                $transaction->update(['payment_status' => 'expired']);
            } else {
                $transaction->update(['payment_status' => 'pending']);
            }
        } catch (\Exception $e) {
            Log::error('Failed to process transaction', ['error' => $e->getMessage(), 'transaction' => $transaction->id]);
        }
    }
}
