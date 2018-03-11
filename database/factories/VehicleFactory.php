<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Vehicle::class, function (Faker $faker) {
    return [
        'model' => $faker->text(7),
        'patent' => $faker->text(6),
        'type' => $faker->randomElement($array = array ('auto','camioneta','moto')),
        'kat33_id' => $faker->numberBetween(1,50),
        'business_id' => $faker->numberBetween(1,4)
    ];
});
