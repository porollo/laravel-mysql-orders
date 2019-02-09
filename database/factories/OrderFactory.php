<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'partner_name' => $faker->name,
        'order_cost' => $faker->numberBetween($min = 100, $max = 90000),
        'order_name' => $faker->word,
        'order_status' => $faker->randomElement($array = array (0,10,20)),
    ];
});



