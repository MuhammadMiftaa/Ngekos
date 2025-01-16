<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bonus;
use App\Models\BoardingHouse;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Looping setiap boarding house
        BoardingHouse::all()->each(function ($boardingHouse) {
            // Buat 1–3 bonus untuk setiap boarding house
            Bonus::factory()->count(rand(1, 3))->create([
                'boarding_house_id' => $boardingHouse->id,
            ]);
        });
    }
}
