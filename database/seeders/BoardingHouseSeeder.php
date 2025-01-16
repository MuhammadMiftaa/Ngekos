<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BoardingHouse;

class BoardingHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 50 data boarding house
        BoardingHouse::factory()->count(50)->create();
    }
}
