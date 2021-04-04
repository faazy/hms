<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $faker = \Faker\Factory::create();

        User::create([
            'name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => 'admin@hms.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
