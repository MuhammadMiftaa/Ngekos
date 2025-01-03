<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check()
    {
        return view('pages.check-booking');
    }
}
