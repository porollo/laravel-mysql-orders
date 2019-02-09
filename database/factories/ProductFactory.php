<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'provider_name' => $faker->unique()->name,
        'product_cost' => $faker->numberBetween($min = 100, $max = 90000),
    ];
});


