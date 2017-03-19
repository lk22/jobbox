<?php

use Illuminate\Database\Seeder;

use JobDesk\JobApplication;

class JobApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(JobApplication::class, rand(1, 10))->create();
    }
}
