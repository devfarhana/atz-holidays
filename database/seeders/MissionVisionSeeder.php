<?php

namespace Database\Seeders;

use App\Models\MissionVision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MissionVisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        MissionVision::create([
            'title'=> $faker->sentence,
            'mission_title' => $faker->sentence,
            'vision_title' => $faker->sentence,
            'mission_description' => $faker->paragraph,
            'vision_description' => $faker->paragraph,
        ]);
       
    }
}
