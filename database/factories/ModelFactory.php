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
$factory->define(JobDesk\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstname' => $faker->firstname,
        'middlename' => 'Middlename',
        'lastname' => $faker->lastname,
        'name' => $faker->firstname . ' Middlename ' . $faker->lastname, 
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
        ]),
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now()
    ];
});

$factory->define(JobDesk\Message::class, function( Faker\Generator $faker ) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'message' => $faker->text,
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now()
    ];
});

$factory->define(JobDesk\Post::class, function( Faker\Generator $faker ) {
    return [
        'title' => $faker->title,
        'body' => $faker->text,
        'post_cover' => 'http://uvmbored.com/wp-content/uploads/2015/05/blog.jpg',
        'user_id' => 1
    ];
});
