<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TouristPlace;

class TouristPlaceSeeder extends Seeder
{
    public function run()
    {
        $pegunungan = \App\Models\Category::firstOrCreate(['slug' => 'pegunungan'], ['name' => 'Pegunungan']);
        $budaya = \App\Models\Category::firstOrCreate(['slug' => 'budaya'], ['name' => 'Budaya']);
        $keluarga = \App\Models\Category::firstOrCreate(['slug' => 'keluarga'], ['name' => 'Keluarga']);

        $places = [
            [
                'category_id' => $budaya->id,
                'name' => 'Simpang Lima Gumul',
                'slug' => 'simpang-lima-gumul',
                'description' => 'Ikon Kediri dengan monumen megah, area kuliner dan ruang publik luas.',
                'location' => 'Kabupaten Kediri',
                'ticket_price' => 0,
                'open_time' => '05:00',
                'close_time' => '23:00',
                'image' => 'slg.jpg'
            ],
            [
                'category_id' => $pegunungan->id,
                'name' => 'Gunung Kelud',
                'slug' => 'gunung-kelud',
                'description' => 'Destinasi favorit dengan panorama kawah dan jalur offroad.',
                'location' => 'Kabupaten Kediri',
                'ticket_price' => 15000,
                'open_time' => '07:00',
                'close_time' => '17:00',
                'image' => 'kelud.jpg'
            ],
            [
                'category_id' => $pegunungan->id,
                'name' => 'Air Terjun Dolo',
                'slug' => 'air-terjun-dolo',
                'description' => 'Air terjun sejuk di kaki Gunung Wilis, cocok untuk trekking ringan.',
                'location' => 'Dusun Besuki, Mojo, Kediri',
                'ticket_price' => 10000,
                'open_time' => '07:00',
                'close_time' => '16:30',
                'image' => 'dolo.jpg'
            ],
            [
                'category_id' => $budaya->id,
                'name' => 'Goa Selomangleng',
                'slug' => 'goa-selomangleng',
                'description' => 'Goa sejarah dengan relief kuno dan area taman hijau.',
                'location' => 'Kota Kediri',
                'ticket_price' => 8000,
                'open_time' => '07:00',
                'close_time' => '16:00',
                'image' => 'selomangleng.jpg'
            ],
            [
                'category_id' => $keluarga->id,
                'name' => 'Sumber Ubalan',
                'slug' => 'sumber-ubalan',
                'description' => 'Taman rekreasi keluarga dengan kolam alami dan wahana bermain.',
                'location' => 'Kras, Kediri',
                'ticket_price' => 12000,
                'open_time' => '07:00',
                'close_time' => '16:00',
                'image' => 'ubalan.jpg'
            ]
        ];

        foreach ($places as $place) {
            TouristPlace::updateOrCreate(
                ['slug' => $place['slug']],
                $place
            );
        }
    }
}
