<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FilamentUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ngekos.com',
            'password' => Hash::make('123'),
            'email_verified_at' => now(),
        ]);
    }
}
