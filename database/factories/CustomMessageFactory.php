<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\CustomMessage::class, function (Faker $faker) {
    // static $password;

    return [
        'user_id' => function() { return factory(App\User::class)->id; },
        'text' => $faker->randomHtml(2,6),
        'title' => $faker->catchPhrase,
    ];
});
