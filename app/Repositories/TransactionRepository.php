<?php

namespace App\Repositories;

use App\Interfaces\TransactionRepositoryInterface;

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
}
