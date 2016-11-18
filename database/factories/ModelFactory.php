<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\EOSRequest::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'project_id' => $faker->randomDigit,
        'user_id' => $faker->uuid,
        'description' => $faker->paragraph,
        'dimX' => rand(5,52),
        'dimY' => rand(5,52),
        'dimZ' => rand(5,52),
        'volume' => $faker->randomDigit,
        'cost' => $faker->randomFloat(2, 0, 200),
        'clean' => $faker->boolean,
        'hinges' => $faker->boolean,
        'threads' => $faker->boolean,
        'number_of_parts' => $faker->randomDigit,
        'admin_notes' => $faker->paragraph,
        'completion_date' => $faker->dateTimeThisDecade($max = 'now'),
        'status' => rand(0,3),
        'needed_by' => $faker->dateTimeThisDecade($max = 'now'),
    ];
});
