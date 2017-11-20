<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 500) as $item) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'user_type_id' => $faker->numberBetween(1, 3),
                'faculty_id' => $faker->numberBetween(6, 15),
                'study_year_id' => 11
            ]);
        }
    }
}
