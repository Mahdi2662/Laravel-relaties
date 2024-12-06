<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\Models\User::class),
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
    ];
});
