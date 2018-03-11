<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Param::class, function (Faker $faker) {
    return [
        'speed' => $faker->randomFloat(2,50,100),
        'accel' => $faker->randomFloat(2,50,100),
        'sudden_break' => $faker->boolean(50),
        'forward_collision' => $faker->boolean(50),
        'lane_departure' => $faker->boolean(50),
        'lat' => $faker->latitude,
        'lon' => $faker->longitude,
        'send_date' => $faker->date("Y-m-d H:m:s"),
        'imei_number' => function () {
            return factory(\Kat33\Kat33::class)->create()->imei;
        }
    ];
});
