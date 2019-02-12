<?php

use Faker\Generator as Faker;

$factory->define(App\Partner::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->name,
    ];
});
