<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text($maxNbChars = 300),
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
