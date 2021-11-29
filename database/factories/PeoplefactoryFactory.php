<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\People::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'age' => mt_rand(18, 150),
    ];
});
