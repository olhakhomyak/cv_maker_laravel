<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            User::create([
               'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->numberBetween(100000000, 999999999),
                'resume' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'password' => $faker->password
            ]);
        }
    }
}
