<?php

use Faker\Generator as Faker;

$factory->define(App\OrderProducts::class, function (Faker $faker) {
    return [
        'quantity' => $faker->numberBetween($min = 0, $max = 100),
        'price' => $faker->numberBetween($min = 1, $max = 90000),
        'order_id' => function() {
            return factory(App\Order::class)->create()->id;
        },
        'product_id' => function() {
            return factory(App\Product::class)->create()->id;
        },
    ];
});
