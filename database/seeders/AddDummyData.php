<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AddDummyData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add dummy data user
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 7; $i++) {
           $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'policestation' => $faker->city,
                'case_no' => $faker->randomNumber(5),
                'under_section' => $faker->randomNumber(3),
                'password' => bcrypt('password'),
                'profile_picture' => $faker->imageUrl(),
                'address' => $faker->address,
                'status' => $faker->boolean,
            ]);

            $user->assignRole('CRIMINAL');
        }
    }
}
