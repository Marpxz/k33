<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Travel::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,50),
        'route_id' => $faker->numberBetween(1,50),
        'feedback_id' => $faker->numberBetween(1,50),
        'vehicle_id' => $faker->numberBetween(1,50),
        'kat33_id' => $faker->numberBetween(1,50),
        'business_id' => $faker->numberBetween(1,4),
        'start' => $faker->date('Y-m-d H:m:s'),
        'end' => $faker->date('Y-m-d H:m:s'),
    ];
});
