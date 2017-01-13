<?php

use Illuminate\Database\Seeder;
use App\Entities\JobExperience;

class JobExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 30) as $index) {
            JobExperience::create([
                'user_id' => $faker->numberBetween(1, 10),
                'job_title' => $faker->word,
                'company_name' => $faker->company,
                'start_date' => $faker->date(),
                'end_date' => $faker->date()
            ]);
        }
    }
}