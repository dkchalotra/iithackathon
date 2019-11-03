<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    $student = App\Student::all()->random();
    $meal = App\Meal::all()->random();
    return [
        'student_id' => $student->id,
        'meal_id' => $meal->id,
        'feedback' => $faker->text,
        'created_at' => $faker->dateTime()
    ];
});
