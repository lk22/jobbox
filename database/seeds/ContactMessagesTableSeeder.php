<?php

use Illuminate\Database\Seeder;
use JobDesk\Message;

class ContactMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Message::class, rand( 1, 10 ))->create();
    }
}
