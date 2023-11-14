<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define district names for Bangladesh
        $districtNames = [
            'Bagerhat',
            'Bandarban',
            'Barguna',
            'Barisal',
            'Bhola',
            'Bogura',
            'Brahmanbaria',
            'Chandpur',
            'Chapainawabganj',
            'Chattogram',
            'Chuadanga',
            'Comilla',
            'Cox\'s Bazar',
            'Dhaka',
            'Dinajpur',
            'Faridpur',
            'Feni',
            'Gaibandha',
            'Gazipur',
            'Gopalganj',
            'Habiganj',
            'Jamalpur',
            'Jashore (Jessore)',
            'Jhalokathi',
            'Jhenaidah',
            'Joypurhat',
            'Khagrachari',
            'Khulna',
            'Kishoreganj',
            'Kushtia',
            'Lakshmipur',
            'Lalmonirhat',
            'Madaripur',
            'Magura',
            'Manikganj',
            'Meherpur',
            'Moulvibazar',
            'Munshiganj',
            'Mymensingh',
            'Naogaon',
            'Narail',
            'Narayanganj',
            'Narsingdi',
            'Natore',
            'Netrokona',
            'Nilphamari',
            'Noakhali',
            'Pabna',
            'Panchagarh',
            'Patuakhali',
            'Pirojpur',
            'Rajbari',
            'Rajshahi',
            'Rangamati',
            'Rangpur',
            'Satkhira',
            'Shariatpur',
            'Sherpur',
            'Sirajganj',
            'Sunamganj',
            'Sylhet',
            'Tangail',
            'Thakurgaon',
        ];

        // Insert data into the 'locations' table using the Location model
        foreach ($districtNames as $districtName) {
            Location::create([
                'location_name' => $districtName,
            ]);
        }
    }
}
