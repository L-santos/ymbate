<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->word($nb=10),
        'title' => $faker->sentence($nb = 4),
        'description' => $faker->text($maxNbChars = 120),
    ];
});
