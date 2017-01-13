<?php

use Illuminate\Database\Seeder;
use App\Entities\JobResponsibility;

class JobResponsibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 50) as $index) {
            JobResponsibility::create([
                'job_experience_id' => $faker->numberBetween(1, 30),
                'responsibility' => $faker->sentence($nbWords = 5)
            ]);
        }
    }
}