<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            // FilamentUserSeeder::class,
            CitySeeder::class,
            CategorySeeder::class,
            BoardingHouseSeeder::class,
            RoomSeeder::class,
            BonusSeeder::class,
            RoomImageSeeder::class,
        ]);
    }
}
