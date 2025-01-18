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
        // Daftar thumbnail gambar
        $thumbnails = [
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181047/ngekos-asset/boarding%20house/rywthxlgdsul5yzncled.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181047/ngekos-asset/boarding%20house/tiirxaqku0dbw6yvap05.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181047/ngekos-asset/boarding%20house/esrb5qcte7axdohwymbp.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181048/ngekos-asset/boarding%20house/k7lpeh6ullonq3xfkunz.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181048/ngekos-asset/boarding%20house/qe4kgtw37mr5awyljlmo.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181048/ngekos-asset/boarding%20house/s8wvfxn6o9ylgzjo7edt.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181048/ngekos-asset/boarding%20house/uqk6ll7om8xdkdqhh7dw.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181048/ngekos-asset/boarding%20house/rismocywgdopipnblvnt.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181049/ngekos-asset/boarding%20house/rdh1qixvavmwl6zhnaac.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181049/ngekos-asset/boarding%20house/sek0x8jtnjl5ktahpg6q.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181049/ngekos-asset/boarding%20house/w5r6xbx0zzirbepzcobs.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181049/ngekos-asset/boarding%20house/klzyi9i8es0vpbbu6dmu.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181049/ngekos-asset/boarding%20house/pe0dffbx6hnccg2drb5m.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737181050/ngekos-asset/boarding%20house/j1sc6tmp6yv2hvzhr2zg.jpg',
        ];

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
            'thumbnail' => $this->faker->randomElement($thumbnails), // Pilih thumbnail acak
            'city_id' => City::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'address' => $this->faker->address(),
        ];
    }
}
