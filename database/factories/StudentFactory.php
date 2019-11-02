<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'contact' => $faker->e164PhoneNumber,
        'rollno' => $faker->randomNumber(7), // 7-digit rollno
    ];
});
