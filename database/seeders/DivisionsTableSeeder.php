<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFile = storage_path('app/public/bd-divisions.json');
        // Read and decode JSON data
        $jsonData = json_decode(File::get($jsonFile), true);

        // Insert data into the database
        if (!empty($jsonData['divisions'])) {
            DB::table('divisions')->insert($jsonData['divisions']);
        }
    }
}
