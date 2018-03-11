<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Business::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});
