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
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172077/ngekos-asset/category/hh5337qjobm4zpaysnl9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Villa',
                'slug' => Str::slug('Villa'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/j3g4o2kvtlqll8qhwucj.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kos',
                'slug' => Str::slug('Kos'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/dha2rmlvrzgotydsy2ll.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Apartemen',
                'slug' => Str::slug('Apartemen'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/x0fpkfrc78ma68yxe2am.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guest House',
                'slug' => Str::slug('Guest House'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/xwlczkfbeupkmiajjz0s.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Resort',
                'slug' => Str::slug('Resort'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172098/ngekos-asset/category/ea7nm9kfyatlf3anleyy.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cottage',
                'slug' => Str::slug('Cottage'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/hlctup07rvzxp7w5yikz.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Homestay',
                'slug' => Str::slug('Homestay'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/qrzsukno6ruvndw0kws8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Capsule Hotel',
                'slug' => Str::slug('Capsule Hotel'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/fspjz0s1zeyxon031e1v.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hostel',
                'slug' => Str::slug('Hostel'),
                'image' => 'https://res.cloudinary.com/dblibr1t2/image/upload/v1737172099/ngekos-asset/category/dv8e0iakgu9toiznmbba.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
