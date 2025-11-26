<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'school_name' => 'Sekolah Terpadukita Zikia',
            'school_phone' => '(0266) 0000-000',
            'school_email' => 'info@sitadzkia.sch.id',
            'school_address' => 'Jl. Pendidikan No. 1, Sukabumi, Jawa Barat',
            'school_lat' => '-6.9214',
            'school_lng' => '106.9269',
            'school_description' => 'Sekolah dengan visi mengembangkan potensi siswa secara holistik.',
            'social_facebook' => 'https://facebook.com/sitadzkia',
            'social_instagram' => 'https://instagram.com/sitadzkia',
            'social_youtube' => 'https://youtube.com/@sitadzkia',
            'social_twitter' => 'https://twitter.com/sitadzkia',
            'admission_phone' => '(0266) 123-4567',
            'admission_email' => 'spmb@sitadzkia.sch.id',
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
