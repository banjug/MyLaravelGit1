<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'lastname' => $faker -> lastName(),
        'age' => $faker -> numberBetween(18,80),
        'salary' => $faker -> numberBetween(1000, 3000),
        'week_hours' => $faker -> numberBetween(10, 50),
        'hiring_date' => $faker -> date(),
    ];
});
