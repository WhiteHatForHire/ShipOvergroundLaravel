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
$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        'qualityScore' => $faker->name,
        'personalityScore' => $faker->numberBetween($min = 1, $max = 10),
        'professionalismScore' => $faker->numberBetween($min = 1, $max = 10),
        'qualityScore' => $faker->numberBetween($min = 1, $max = 10),
        'body'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'title'=> $faker->word,
        'overallScore'=> 5,
    ];
});