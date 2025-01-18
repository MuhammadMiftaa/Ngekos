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
        $faker = \Faker\Factory::create('id_ID');

        // Array pasangan bonus dan URL gambar
        $bonuses = [
            'Laundry' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173589/ngekos-asset/bonus/bshlfoq5xblvpurdk6rl.jpg',
            'Makan Pagi' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/urkyqifxhmkts8jlryqb.jpg',
            'Makan Siang' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/on97hzxdj55kxs3y4hjp.jpg',
            'Makan Malam' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/gunixyg0uafqkp7zjdoz.jpg',
            'Snack' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/tbhurumalqn2dpvikq51.jpg',
            'Toilet Pribadi' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/ihogx1rntnyydryhftlg.jpg',
            'WiFi' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737173588/ngekos-asset/bonus/snqbkw6nzipnyl6wdv0h.jpg',
        ];

        // Pilih bonus secara acak
        $bonusName = $faker->randomElement(array_keys($bonuses));

        return [
            'boarding_house_id' => BoardingHouse::inRandomOrder()->first()->id,
            'name' => $bonusName,
            'image' => $bonuses[$bonusName], // Gambar sesuai dengan bonus yang dipilih
            'description' => $faker->sentence(10), // Deskripsi acak
        ];
    }
}
