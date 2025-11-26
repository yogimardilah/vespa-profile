<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['name' => 'Laboratorium IPA', 'icon' => 'bi bi-flask-fill', 'description' => null, 'order' => 1],
            ['name' => 'Perpustakaan', 'icon' => 'bi bi-book-fill', 'description' => null, 'order' => 2],
            ['name' => 'Lapangan Olahraga', 'icon' => 'bi bi-basketball', 'description' => null, 'order' => 3],
            ['name' => 'Ruang Ekstrakurikuler', 'icon' => 'bi bi-music-note-beamed', 'description' => null, 'order' => 4],
        ];

        foreach ($items as $item) {
            Facility::updateOrCreate(['name' => $item['name']], $item);
        }
    }
}
