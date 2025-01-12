<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

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

        switch ($transactionStatus) {
            case 'capture':
                if ($request->payment_type == 'credit_card') {
                    if ($request->fraud_status == 'challenge') {
                        $transaction->update([
                            'payment_status' => 'pending',
                        ]);
                    } else {
                        $transaction->update([
                            'payment_status' => 'success',
                        ]);
                    }
                }
                break;
            case 'settlement':
                if ($transaction->payment_status === 'pending') {
                    $transaction->update([
                        'payment_status' => 'success',
                    ]);
                }
                break;
            case 'cancel':
                if ($transaction->payment_status === 'pending') {
                    $transaction->update([
                        'payment_status' => 'canceled',
                    ]);
                }
                break;
            case 'deny':
                if ($transaction->payment_status === 'pending') {
                    $transaction->update([
                        'payment_status' => 'failed',
                    ]);
                }
                break;
            case 'expire':
                if ($transaction->payment_status === 'pending') {
                    $transaction->update([
                        'payment_status' => 'expired',
                    ]);
                }
                break;
            case 'pending':
                $transaction->update([
                    'payment_status' => 'pending',
                ]);
                break;
            default:
                $transaction->update([
                    'payment_status' => 'unknown',
                ]);
                break;
        }
    }
}
