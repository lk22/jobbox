<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * create admin 
         */
        $user = new JobFactory\User;

        $user->createUserWith([
        	'firstname' => 'Leo',
        	'lastname' => 'Knudsen',
        	'email' => 'lkdevelop@jobwriter.com',
        	'password' => bcrypt('1'),
        	'remember_token' => str_random(10),
         	'is_admin' => 1,
        	'has_active_email' => 1,
        	'avatar' => 'http://www.zocom.se/en/assets/frontpanel/images/img.png',
       	]);
    }
}
