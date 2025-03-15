<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // Seed a single contact record
        Contact::create([
            'title'   => $faker->sentence(3), // Generates a 3-word title
            'address' => $faker->address, // Generates a fake address
            'phone'   => $faker->phoneNumber, // Generates a fake phone number
            'email'   => $faker->email, // Generates a fake email address
            'map'     => $faker->url, // Generates a fake URL (for map link)
        ]);

        echo "Contact seeded successfully!\n";
    }
}
