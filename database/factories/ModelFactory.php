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
$factory->define(JobBox\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->firstname,
        'middlename' => 'Middlename',
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar' => 'http://www.zocom.se/en/assets/frontpanel/images/img.png',
        'is_admin' => rand(0,1),
        'has_active_email' => rand(0,1),
        'dream_job_title' => $faker->randomElement([
            'Web Developer',
            'Auto Mechanic',
            'Graphic Designer',
            'SEO manager',
            'Front-end Developer',
            'Backend developer'
        ])
    ];
});
