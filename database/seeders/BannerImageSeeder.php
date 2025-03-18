<?php

namespace Database\Seeders;

use App\Models\BannerImage;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerImage::create([
            'about_banner' => 'storage/banners/about_banner.jpg',
            

        ]);
    }
}



