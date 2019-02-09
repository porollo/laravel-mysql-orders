<?php

use Faker\Generator as Faker;

$factory->define(App\OrderEdit::class, function (Faker $faker) {
    return [
        'client_email' => $faker->unique()->email,
        'partner_name' => $faker->unique()->name,
        'products' => $faker->word,
        'order_status' => $faker->randomElement($array = array (0,10,20)),
        'order_cost' => $faker->numberBetween($min = 100, $max = 90000),
        'order_save_status' => $faker->boolean,
    ];
});


