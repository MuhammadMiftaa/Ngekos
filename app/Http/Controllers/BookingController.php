<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerInformationStoreRequest;
use App\Interfaces\BoardingHouseRepositoryInterface;
use App\Interfaces\TransactionRepositoryInterface;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private TransactionRepositoryInterface $transactionRepository;
    private BoardingHouseRepositoryInterface $boardingHouseRepository;

    public function __construct(TransactionRepositoryInterface $transactionRepository, BoardingHouseRepositoryInterface $boardingHouseRepository)
    {
        $this->transactionRepository = $transactionRepository;
        $this->boardingHouseRepository = $boardingHouseRepository;
    }

    public function booking(Request $request, $slug)
    {
        $this->transactionRepository->saveTransactionsDataFromSession($request->all());

        return redirect()->route('booking.information', $slug);
    }

    public function information($slug)
    {
        $transaction = $this->transactionRepository->getTransactionsDataFromSession();
        $boardingHouse = $this->boardingHouseRepository->getBoardingHouseBySlug($slug);
        $room = $this->boardingHouseRepository->getBoardingHouseRoomById($transaction['room_id']);

        return view('pages.booking.information', compact('transaction', 'boardingHouse', 'room'));
    }

    public function save(CustomerInformationStoreRequest $request, $slug)
    {
        $data = $request->validated();
        $this->transactionRepository->saveTransactionsDataFromSession($data);

        return redirect()->route('booking.checkout', $slug);
    }

    public function checkout($slug)
    {
        $transaction = $this->transactionRepository->getTransactionsDataFromSession();
        $boardingHouse = $this->boardingHouseRepository->getBoardingHouseBySlug($slug);
        $room = $this->boardingHouseRepository->getBoardingHouseRoomById($transaction['room_id']);

        return view('pages.booking.checkout', compact('transaction', 'boardingHouse', 'room'));
    }

    public function payment(Request $request, $slug)
    {
        $this->transactionRepository->saveTransactionsDataFromSession($request->all());
        $transaction = $this->transactionRepository->saveTransaction($this->transactionRepository->getTransactionsDataFromSession());

        dd($transaction);
    }
}
