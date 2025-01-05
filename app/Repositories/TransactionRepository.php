<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Room;
use App\Models\Transaction;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function getTransactionsDataFromSession()
    {
        return session()->get('transactions');
    }

    public function saveTransactionsDataFromSession($data)
    {
        $transaction = session()->get('transactions', []);

        foreach ($data as $key => $value) {
            $transaction[$key] = $value;
        }
        session()->put('transactions', $transaction);
    }

    public function saveTransaction($data)
    {
        $room = Room::find($data['room_id']);
        $data = $this->generateTransactionData($data, $room);
        $transaction = Transaction::create($data);

        session()->forget('transactions');
        return $transaction;
    }

    private function generateTransactionData($data, $room)
    {
        $data['code'] = $this->generateTransactionCode();
        $data['payment_status'] = 'pending';
        $data['transaction_date'] = now();

        $total = $this->calculateTotalAmount($room->price_per_month, $data['duration']);
        $data['total_amount'] = $this->calculatePaymentAmount($total, $data['payment_method']);

        return $data;
    }

    private function generateTransactionCode()
    {
        return 'MFT' . mt_rand(10000, 99999) . mt_rand(100, 999);
    }

    private function calculateTotalAmount($price, $duration)
    {
        $subtotal = $price * $duration;
        $tax = $subtotal * 0.11;
        $insurance = $subtotal * 0.01;
        return $subtotal + $tax + $insurance;
    }

    private function calculatePaymentAmount($total, $paymentMethod)
    {
        if ($paymentMethod == 'down_payment') {
            return $total * 0.3;
        }

        return $total;
    }

    public function getTransactionByCode($code)
    {
        return Transaction::where('code', $code)->first();
    }
}
