<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Hotel',
                'slug' => Str::slug('Hotel'),
                'image' => 'hotel.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Villa',
                'slug' => Str::slug('Villa'),
                'image' => 'villa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kos',
                'slug' => Str::slug('Kos'),
                'image' => 'kos.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apartemen',
                'slug' => Str::slug('Apartemen'),
                'image' => 'apartemen.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guest House',
                'slug' => Str::slug('Guest House'),
                'image' => 'guest-house.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resort',
                'slug' => Str::slug('Resort'),
                'image' => 'resort.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cottage',
                'slug' => Str::slug('Cottage'),
                'image' => 'cottage.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Homestay',
                'slug' => Str::slug('Homestay'),
                'image' => 'homestay.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Capsule Hotel',
                'slug' => Str::slug('Capsule Hotel'),
                'image' => 'capsule-hotel.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hostel',
                'slug' => Str::slug('Hostel'),
                'image' => 'hostel.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
