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

$factory->define(App\Company::class, function (Faker $faker) {
    // static $password;

    return [
        'user_id' => function() { return factory(App\User::class)->id; },
        'name' => $faker->name,
        'address' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'phone_no' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'sender_name' => $faker->name,
    ];
});
