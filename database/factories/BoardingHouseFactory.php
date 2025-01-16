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
        return [
            'name' => $this->faker->unique()->company(),
            'slug' => fn (array $attributes) => Str::slug($attributes['name']),
            'thumbnail' => $this->faker->imageUrl(640, 480, 'boarding house', true),
            'city_id' => City::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->text(200), // Deskripsi acak (Bahasa Indonesia karena locale diubah)
            'price' => $this->faker->numberBetween(100000, 1000000), // Harga acak
            'address' => $this->faker->address(), // Alamat lokal Indonesia
        ];
    }
}
s