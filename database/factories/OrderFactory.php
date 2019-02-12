<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement($array = array (0,10,20)),
        'client_email' => $faker->unique()->safeEmail,
        'delivery_dt' => $faker->dateTime($max = 'now', $timezone = null),// +3?
        'partner_id' => function() {
            return factory(App\Partner::class)->create()->id;
        },
    ];
});



