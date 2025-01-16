<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\BoardingHouse;

class RoomSeeder extends Seeder
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
            // Buat 1–3 room untuk setiap boarding house
            Room::factory()->count(rand(1, 3))->create([
                'boarding_house_id' => $boardingHouse->id,
            ]);
        });
    }
}
