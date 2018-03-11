<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Kat33::class, function (Faker $faker) {
    return [
        'status' => $faker->boolean(50),
        'imei' => $faker->creditCardNumber(),
        'business_id' => $faker->numberBetween(1,4)
    ];
});
