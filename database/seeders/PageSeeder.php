<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate([
            'slug' => 'about',
        ], [
            'title' => 'Tentang Sekolah',
            'excerpt' => 'Profil singkat, visi & misi, dan fasilitas sekolah.',
            'body' => '<div class="row"><div class="col-md-8"><h2>Profil Singkat</h2><p>SDIT RUSMANI berdiri sejak 1998 dengan tujuan mencetak lulusan berkarakter dan berprestasi. Kami menekankan keseimbangan akademik dan kegiatan karakter.</p><h3>Visi</h3><p>Menjadi institusi pendidikan unggul yang berkarakter dan berprestasi.</p><h3>Misi</h3><ul><li>Meningkatkan kualitas pembelajaran</li><li>Mengembangkan karakter siswa</li><li>Mendorong inovasi dan kreativitas</li></ul></div><div class="col-md-4"><h3>Fasilitas</h3><ul><li>Laboratorium IPA</li><li>Perpustakaan</li><li>Lapangan Olahraga</li><li>Ruang Ekstrakurikuler</li></ul></div></div>',
            'published_at' => now(),
        ]);
    }
}
