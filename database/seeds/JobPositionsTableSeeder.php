<?php

use Illuminate\Database\Seeder;

use JobDesk\JobPosition;

class JobPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(JobPosition::class, 1000)->create();
    }
}
