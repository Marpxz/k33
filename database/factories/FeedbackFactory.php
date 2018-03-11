<?php

use Faker\Generator as Faker;

$factory->define(\Kat33\Feedback::class, function (Faker $faker) {
    return [
        'opinion_calification' => $faker->boolean(50),
        'security_calification' => $faker->boolean(50),
        'opinion' => $faker->text(200),
        'security' => $faker->text(100),
        'business_id' => $faker->numberBetween(1,4),

    ];
});
