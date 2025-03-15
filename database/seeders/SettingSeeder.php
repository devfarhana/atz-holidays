<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use Faker\Factory as Faker;

class SettingSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        Setting::create([
            'system_name'  => 'Admin Panel',
            'address'      => '522/B, North Shahjahanpur Dhaka-1217',
            'phone'        => '01500000000',
            'email'        => 'info@mail.com',
            'logo'         => '',
            'favicon'      => '',
            'system_logo'  => '',
            'footer_text'  => '© 2024 Admin Dashboard. All rights reserved.',
        ]);
    }
}
