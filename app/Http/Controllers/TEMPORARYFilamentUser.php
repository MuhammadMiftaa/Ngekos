<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class TEMPORARYFilamentUser extends Controller
{
    public function createFilamentUser()
    {
        Artisan::call('make:filament-user');
        return response()->json(['message' => 'Filament user created successfully.']);
    }
}
