<?php

namespace Database\Factories;

use App\Models\Bonus;
use App\Models\BoardingHouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class BonusFactory extends Factory
{
    protected $model = Bonus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'boarding_house_id' => BoardingHouse::inRandomOrder()->first()->id,
            'name' => $this->faker->randomElement([
                'Laundry', 
                'Makan Pagi', 
                'Makan Siang', 
                'Makan Malam', 
                'Snack', 
                'Toilet Pribadi', 
                'WiFi'
            ]),
            'image' => $this->faker->imageUrl(640, 480, 'bonus', true), // URL gambar acak
            'description' => $this->faker->sentence(10), // Deskripsi acak
        ];
    }
}
