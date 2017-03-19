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
$factory->define(JobDesk\User::class, function ( Faker\Generator $faker ) {
    static $password;

    return [
        'firstname' => $faker->firstname,
        'middlename' => 'Middlename',
        'lastname' => $faker->lastname,
        'name' => $faker->firstname . ' Middlename ' . $faker->lastname,
        'slug' => $faker->slug,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar' => 'http://www.zocom.se/en/assets/frontpanel/images/img.png',
        'is_admin' => rand(0,1),
        'has_active_email' => rand(0,1),
        'dream_job_title' => $faker->jobTitle,
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
        'title' => $faker->words(rand(2, 5), true),
        'slug' => $faker->slug,
        'body' => $faker->paragraphs(rand(5, 20), true),
        'post_cover' => 'http://uvmbored.com/wp-content/uploads/2015/05/blog.jpg',
        'user_id' => 1,
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now()
    ];
});

$factory->define(JobDesk\JobApplication::class, function( Faker\Generator $faker ) {

    return [
        'body' => $faker->paragraphs(rand(1, 25), true),
        'title' => 'Ansøgning til ' . $faker->words(rand(1, 10), true),
        'slug' => 'ansøging-til-'. $faker->slug,
        'user_id' => rand(1,4),
        'created_at' => Carbon\Carbon::now(),
        'updated_at' => Carbon\Carbon::now()
    ];

});
