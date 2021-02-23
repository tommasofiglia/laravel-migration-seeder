<?php

use App\Course;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
          $newCourse = new Course();
          $newCourse->subject = $faker->word();
          $newCourse->hours_per_day = $faker->randomDigitNotNull();
          $newCourse->total_hours = $faker->numberBetween($min = 100, $max = 700);
          $newCourse->save();
        }
    }
}
