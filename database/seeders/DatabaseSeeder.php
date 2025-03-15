<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AboutUsSeeder::class,
            // WhyChooseUsSeeder::class,
            MissionVisionSeeder::class,
            SettingSeeder::class,
            ContactSeeder::class,
            UserSeeder::class,
            GreetingSeeder::class,
        ]);
    }
}
