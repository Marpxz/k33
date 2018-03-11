<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Checklist::class, function (Faker $faker) {
    return [
        'folio' => $faker->randomNumber(7),
        'p1' => $faker->boolean(50),
        'p2' => $faker->boolean(50),
        'p3' => $faker->boolean(50),
        'p4' => $faker->boolean(50),
        'p5' => $faker->boolean(50),
        'p6' => $faker->boolean(50),
        'p7' => $faker->boolean(50),
        'p8' => $faker->boolean(50),
        'p9' => $faker->boolean(50),
        'p10' => $faker->boolean(50),
        'vehicle_id' => $faker->numberBetween(1,50)
    ];
});
