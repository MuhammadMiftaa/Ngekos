<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckBookingRequest;
use App\Interfaces\TransactionRepositoryInterface;
use Illuminate\Http\Request;

class CheckController extends Controller
{

    private TransactionRepositoryInterface $transactionRepository;

    public function __construct(TransactionRepositoryInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function check()
    {
        return view('pages.check-booking');
    }

    public function show(CheckBookingRequest $request)
    {
        $data = $request->validated();
        $transaction = $this->transactionRepository->getTransactionDetail($data['code'], $data['email'], $data['phone']);

        if (!$transaction) {
            return redirect()->back()->with('error', 'Transaction not found');
        }

        return view('pages.booking-detail', compact('transaction'));
    }
}
