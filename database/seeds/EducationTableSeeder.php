<?php

use Illuminate\Database\Seeder;
use App\Entities\Education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 15) as $index) {
            Education::create([
                'user_id' => $faker->numberBetween(1, 10),
                'school_name' => $faker->company,
                'course_name' => $faker->word,
                'start_date' => $faker->date(),
                'end_date' => $faker->date()
            ]);
        }
    }
}