<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween($min = 100, $max = 90000),
        'vendor_id' => function() {
            return factory(App\Vendor::class)->create()->id;
        },
    ];
});


