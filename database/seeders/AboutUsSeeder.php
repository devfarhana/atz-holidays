<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutUs;
use Faker\Factory as Faker;

class AboutUsSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        AboutUs::create([
            'title'=> $faker->sentence,
            'sub_title' => $faker->sentence,
            'description' => $faker->paragraph,
            'about_image' => $faker->sentence,
        ]);
    }
}
