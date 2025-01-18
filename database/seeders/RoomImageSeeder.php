<?php

namespace Database\Seeders;

use App\Models\RoomImage;
use Illuminate\Database\Seeder;

class RoomImageSeeder extends Seeder
{
    public function run()
    {
        // Daftar URL gambar
        $images = [
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/sr1qpbxkg5og75c05jl3.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/gpyxwkaduv3lgvbs2nsw.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/l5f1kgqa5pmtsubqk3bm.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/ctphavcmbyvfipcfqdov.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/bslcbbs2has5ulb6brkz.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/mv8xozohq4deseac4cze.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184507/ngekos-asset/room/bqox5wflr0b4dseu3zfx.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/gse4dp71fnkw6x6lf22z.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/sizmy1he6isdnzhxqmwa.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/ijbucqqixqnewpbgtlud.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/v3n92b82wgirae6cpxom.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/wjyipmjpbfvh5wan04oe.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/d9mvqnzbtissx8pxjlb9.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/swceoawgc23e6aeex5gl.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184506/ngekos-asset/room/lreuu9mpai2vavluaq6a.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/fhyc3t6kl6ixtrkpmbok.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/jbu9pukru8keniinctab.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/tfctqnbrws5eqtioz2y2.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/zr12sjnqkjnlcjy5pjxz.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/kqis0awvlo0mooiosjpb.jpg',
            'https://res.cloudinary.com/dblibr1t2/image/upload/v1737184505/ngekos-asset/room/gczu1l7ysjp2qnhpbdpj.jpg'
        ];

        // Buat 100 RoomImage
        for ($roomId = 1; $roomId <= 100; $roomId++) {
            RoomImage::create([
                'room_id' => $roomId,
                'image' => $images[array_rand($images)], // Pilih URL secara acak
            ]);
        }
    }
}
