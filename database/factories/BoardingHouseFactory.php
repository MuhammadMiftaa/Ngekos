<?php

namespace Database\Factories;

use App\Models\BoardingHouse;
use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BoardingHouseFactory extends Factory
{
    protected $model = BoardingHouse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Pola nama boarding house
        $namePatterns = [
            'Kos {firstName}', // Contoh: Kos Andi
            'Hotel {cityName}', // Contoh: Hotel Surabaya
            '{word} Residence', // Contoh: Harmony Residence
            'Pavilion {word}', // Contoh: Pavilion Sakura
            '{lastName} Homestay', // Contoh: Wijaya Homestay
        ];

        // Pilih pola nama secara acak
        $pattern = $this->faker->randomElement($namePatterns);

        // Isi pola nama dengan data
        $name = str_replace(
            ['{firstName}', '{lastName}', '{cityName}', '{word}'],
            [
                $this->faker->firstName(), // Nama depan
                $this->faker->lastName(), // Nama belakang
                City::inRandomOrder()->first()->name ?? 'Unknown City', // Nama kota
                $this->faker->word(), // Kata acak
            ],
            $pattern
        );

        return [
            'name' => $name,
            'slug' => fn(array $attributes) => Str::slug($attributes['name']),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'boarding house', true),
            'city_id' => City::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'address' => $this->faker->address(),
        ];
    }
}
