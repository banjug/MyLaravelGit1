<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'company' => $faker -> word(),
        'representative_name' => $faker -> name(),
        'address' => $faker -> address(),
        'phone_number' => $faker -> phoneNumber(),
        'email' => $faker -> email()
    ];
});
