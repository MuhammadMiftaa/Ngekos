<?php

namespace App\Http\Controllers;

use App\Repositories\BoardingHouseRepository;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    private $cityRepository;
    private $boardingHouseRepository;

    public function __construct(
        CityRepository $cityRepository,
        BoardingHouseRepository $boardingHouseRepository
    ) {
        $this->cityRepository = $cityRepository;
        $this->boardingHouseRepository = $boardingHouseRepository;
    }

    public function show($slug)
    {
        $city = $this->cityRepository->getCityBySlug($slug);
        $boardingHouses = $this->boardingHouseRepository->getBoardingHouseByCitySlug($slug);
        return view('pages.city.show', compact('city', 'boardingHouses'));
    }

}
