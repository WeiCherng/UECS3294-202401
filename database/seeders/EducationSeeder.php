<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed experience data for each user
        // User::all()->each(function (User $user) {
        //     Education::factory()->count(2) // Adjust the count as needed
        //         ->for($user)
        //         ->create();
        // });
    }
}
