<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\CityRepositoryInterface;
use App\Repositories\BoardingHouseRepository;
use Illuminate\Http\Request;

class BoardingHouseController extends Controller
{

    private $cityRepository;
    private $categoryRepository;
    private $boardingHouseRepository;

    public function __construct(
        CityRepositoryInterface $cityRepository,
        CategoryRepositoryInterface $categoryRepository,
        BoardingHouseRepository $boardingHouseRepository
    ) {
        $this->cityRepository = $cityRepository;
        $this->categoryRepository = $categoryRepository;
        $this->boardingHouseRepository = $boardingHouseRepository;
    }

    public function find()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $cities = $this->cityRepository->getAllCities();
        return view('pages.boarding-house.find', compact('categories', 'cities'));
    }

    public function show($slug)
    {
        $boardingHouses = $this->boardingHouseRepository->getBoardingHouseBySlug($slug);
        return view('pages.boarding-house.show', compact('boardingHouses'));
    }

    public function rooms($slug)
    {
        $boardingHouse = $this->boardingHouseRepository->getBoardingHouseBySlug($slug);
        return view('pages.boarding-house.rooms', compact('boardingHouse'));
    }

    public function findResults(Request $request)
    {
        $boardingHouses = $this->boardingHouseRepository->getAllBoardingHouses($request->search, $request->city, $request->category);
        return view('pages.boarding-house.index', compact('boardingHouses'));
    }
}
