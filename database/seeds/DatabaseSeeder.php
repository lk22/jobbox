<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	if(App::environment() === 'production')
    		exit("You're app environment is on" . App::environment() . "and disallows u to seed data to the database");

    	/**
    	 * tables to truncate
    	 */
    	$tables = array(
    		'users',
            'contact_messages',
            'posts'
    	);

    	/**
    	 * seeders to call
    	 */
    	$seeders = array(
    		UsersTableSeeder::class,
            ContactMessagesTableSeeder::class,
            PostsTableSeeder::class
    	);

    	 // disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // get usage
        $rustart = getrusage();

        // allow microtime
        $init1 = microtime(true);

        /**
         * truncate tables
         */
        echo "Will truncate " . count($tables) . " tables\n";
        echo "---------------------\n\n";

        foreach($tables as $index => $table)
        {
        	DB::table($table)->truncate();
        	echo $index . ". Truncated table " . $table . "\n";
        }

        /**
         * running seeders
         */
        echo "Calling " . count($seeders) . " seeders\n";

        echo "-------------------\n\n";

        foreach($seeders as $index => $seeder)
        {
        	$this->call($seeder);
        	echo $index . ". seeded tables " . $seeder . "\n";
        }

        $total = microtime(true) - $init1;

        // enable foreign key checks again
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
