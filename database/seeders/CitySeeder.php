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
                'image' => 'jakarta.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Surabaya',
                'slug' => Str::slug('Surabaya'),
                'image' => 'surabaya.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bandung',
                'slug' => Str::slug('Bandung'),
                'image' => 'bandung.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bali',
                'slug' => Str::slug('Bali'),
                'image' => 'bali.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Medan',
                'slug' => Str::slug('Medan'),
                'image' => 'medan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makassar',
                'slug' => Str::slug('Makassar'),
                'image' => 'makassar.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Yogyakarta',
                'slug' => Str::slug('Yogyakarta'),
                'image' => 'yogyakarta.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Semarang',
                'slug' => Str::slug('Semarang'),
                'image' => 'semarang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Balikpapan',
                'slug' => Str::slug('Balikpapan'),
                'image' => 'balikpapan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Palembang',
                'slug' => Str::slug('Palembang'),
                'image' => 'palembang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
