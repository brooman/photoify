<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'image' => 'default.png',
        'description' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});
