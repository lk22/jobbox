<?php

use Illuminate\Database\Seeder;

use JobDesk\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/**
    	 * create random posts
    	 */
        factory(Post::class, rand(1, 5))->create();
    }
}
