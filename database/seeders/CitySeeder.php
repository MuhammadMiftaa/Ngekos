<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
                'name' => 'Jakarta',
                'slug' => Str::slug('Jakarta'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/ut4gwppf5yfgyu8bxpap.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surabaya',
                'slug' => Str::slug('Surabaya'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737024261/ngekos-asset/city/yobkd9df9yhwi8ox5itt.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bandung',
                'slug' => Str::slug('Bandung'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/plmecb8qu1wo0mlm9czh.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bali',
                'slug' => Str::slug('Bali'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/hbbwdqpscyj9eti8kopc.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Medan',
                'slug' => Str::slug('Medan'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/nci7kyjycsgqtcd2kbxw.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makassar',
                'slug' => Str::slug('Makassar'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/hlmqqtngop4i6tvu4nfc.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta',
                'slug' => Str::slug('Yogyakarta'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/vxwehq9tff2metn6n5ez.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Semarang',
                'slug' => Str::slug('Semarang'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023416/ngekos-asset/city/zzbt5ero7istjeb6cc0v.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Malang',
                'slug' => Str::slug('Malang'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023417/ngekos-asset/city/fmyztvfuqojnfidycznk.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Palembang',
                'slug' => Str::slug('Palembang'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737023416/ngekos-asset/city/qahuqwmrvymgt5frqpkn.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
