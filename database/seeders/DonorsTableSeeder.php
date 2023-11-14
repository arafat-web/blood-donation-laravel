<?php

namespace Database\Seeders;

use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DonorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Get all blood groups, cities, and locations
        $bloodGroups = Blood::pluck('id')->toArray();
        $cities = City::pluck('id')->toArray();
        $locations = Location::pluck('id')->toArray();

        // Create donor data
        for ($i = 0; $i < 50; $i++) {
            Donor::create([
                'fullname' => $this->generateFullName(),
                'phone' => $this->generateRandomPhone(),
                'email' => 'donor' . ($i + 1) . '@example.com',
                'blood_group' => $bloodGroups[array_rand($bloodGroups)],
                'gender' => $this->generateRandomGender(),
                'profession' => $this->generateRandomProfession(),
                'date_of_birth' => $this->generateRandomDateOfBirth(),
                'city' => $cities[array_rand($cities)],
                'location' => $locations[array_rand($locations)],
                'address' => 'Address ' . ($i + 1),
                'status' => 1,
                'active_status' => 1,
                'profile_views' => 1,
            ]);
        }
    }

    /**
     * Generate a random full name.
     *
     * @return string
     */
    private function generateFullName()
    {
        $firstNames = ['John', 'Alice', 'Bob', 'Eva', 'Michael', 'Sophia', 'David', 'Olivia'];
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson'];

        $firstName = $firstNames[array_rand($firstNames)];
        $lastName = $lastNames[array_rand($lastNames)];

        return $firstName . ' ' . $lastName;
    }

    /**
     * Generate a random phone number.
     *
     * @return string
     */
    private function generateRandomPhone()
    {
        return '01' . mt_rand(10000000, 99999999);
    }

    /**
     * Generate a random gender.
     *
     * @return string
     */
    private function generateRandomGender()
    {
        $genders = ['Male', 'Female', 'Other'];
        return $genders[array_rand($genders)];
    }

    /**
     * Generate a random date of birth.
     *
     * @return string
     */
    private function generateRandomDateOfBirth()
    {
        return \Carbon\Carbon::now()->subYears(mt_rand(18, 60))->format('Y-m-d');
    }

    /**
     * Generate a random profession.
     *
     * @return string
     */
    private function generateRandomProfession()
    {
        $professions = ['Engineer', 'Doctor', 'Teacher', 'Artist', 'Software Developer', 'Student'];
        return $professions[array_rand($professions)];
    }
}
