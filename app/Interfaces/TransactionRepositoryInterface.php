<?php

namespace App\Interfaces;

interface TransactionRepositoryInterface
{
    public function getTransactionsDataFromSession();
    public function saveTransactionsDataFromSession($data);
    public function saveTransaction($data);
}
