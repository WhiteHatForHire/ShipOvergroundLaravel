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
        'quality_score' => $faker->name,
        'user_id' => 2,
        'professor_id' => 2,
        'personality_score' => $faker->numberBetween($min = 1, $max = 10),
        'professionalism_score' => $faker->numberBetween($min = 1, $max = 10),
        'quality_score' => $faker->numberBetween($min = 1, $max = 10),
        'body'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'title'=> $faker->word,
        'overall_Score'=> rand (1, 10),
    ];
});

$factory->define(App\Professor::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'professor_email' => $faker->freeEmail,
        'department' => $faker->jobTitle
    ];
});
