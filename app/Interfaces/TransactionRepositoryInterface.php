<?php

namespace App\Interfaces;

interface TransactionRepositoryInterface
{
    public function getTransactionsDataFromSession();
    public function saveTransactionsDataFromSession($data);
    public function saveTransaction($data);
    public function getTransactionByCode($code);
    public function getTransactionDetail($code, $email, $phone);
}
