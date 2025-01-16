<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\BoardingHouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'boarding_house_id' => BoardingHouse::inRandomOrder()->first()->id,
            'name' => $this->faker->unique()->word() . ' Room', // Contoh: "Alpha Room"
            'room_type' => $this->faker->randomElement(['Standard', 'Deluxe', 'Suite']), // Jenis kamar
            'square_feet' => $this->faker->numberBetween(10, 50), // Luas kamar dalam m2
            'capacity' => $this->faker->numberBetween(1, 4), // Kapasitas orang
            'price_per_month' => $this->faker->numberBetween(500000, 3000000), // Harga sewa per bulan
            'is_available' => $this->faker->boolean(80), // 80% kemungkinan kamar tersedia
        ];
    }
}
