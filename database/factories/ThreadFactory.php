<?php

use Faker\Generator as Faker;

$factory->define(App\Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nb = 6),
        'text' => $faker->text($maxNbChars = 200),
        'user_id' => App\User::inRandomOrder()->first()->id,
        'page_id' => App\Page::inRandomOrder()->first()->id,
    ];
});
