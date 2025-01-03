<?php

namespace App\Http\Controllers;

use App\Repositories\BoardingHouseRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $boardingHouseRepository;
    private $categoryRepository;

    public function __construct(
        BoardingHouseRepository $boardingHouseRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->boardingHouseRepository = $boardingHouseRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function show($slug)
    {
        $boardingHouses = $this->boardingHouseRepository->getBoardingHouseByCategorySlug($slug);
        $category = $this->categoryRepository->getCategoryBySlug($slug);
        return view('pages.category.show', compact('boardingHouses', 'category'));
    }
}
