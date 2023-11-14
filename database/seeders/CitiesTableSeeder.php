<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define city names for Bangladesh
        $cityNames = [
            'Dhaka',
            'Chittagong',
            'Khulna',
            'Rajshahi',
            'Sylhet',
            'Barisal',
            'Rangpur',
            // Add more cities as needed
        ];

        // Insert data into the 'cities' table using the City model
        foreach ($cityNames as $cityName) {
            City::create([
                'city_name' => $cityName,
            ]);
        }
    }
}
