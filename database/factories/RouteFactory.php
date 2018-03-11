<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Route::class, function (Faker $faker) {
    return [
        'identification' => $faker->buildingNumber,
        'start' => $faker->streetName,
        'end' => $faker->streetName,
        'observation' => $faker->paragraph(1,true),
        'business_id' => $faker->numberBetween(1,4)
    ];
});
