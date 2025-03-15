<?php

namespace Database\Seeders;

use App\Models\Greeting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 2; $i++) { // Adjust the number of records as needed
            Greeting::create([
                'name' => $faker->name, // Generates a full name
                'designation' => $faker->jobTitle, // Generates a job title
                'image' => $faker->imageUrl(640, 480, 'people'), // Generates a fake image URL
                'message' => $faker->paragraph(3), // Generates a 3-sentence paragraph
            ]);
        }

        echo "Greetings seeded successfully!\n";
    }
}
