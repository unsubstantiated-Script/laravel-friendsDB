<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete all friends first
        //why?
        //data is manipulated so much, use fresh data
        //iterate N times to create that many friends
        //create a friend with rando data

        //deleting first
        \App\Models\Friend::query()->delete();

        $faker = \Faker\Factory::create();

        foreach (range(1, 500) as $number) {
            \App\Models\Friend::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'age' => $faker->numberBetween(18, 100),
            ]);
        }
    }
}
