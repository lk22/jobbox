<?php

use Illuminate\Database\Seeder;

use JobDesk\JobApplication;

use Carbon\Carbon;

class JobApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        JobApplication::create([
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'title' => 'Ansøgning til læreplads some Automekaniker',
            'slug' => 'ansøgning-til-læreplads-som-automekaniker',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        factory(JobApplication::class, rand(1, 10))->create(); // create job applications for the authenticated user to see
    }
}
