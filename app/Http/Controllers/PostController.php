<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

use JobDesk\Post;

class PostController extends Controller
{
	/**
	 * constructor
	 * @param Post $post [description]
	 */
    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

	/**
	 * return all posts
	 * @return [type] [description]
	 */
	public function posts()
	{
		$posts = $this->post->with('user')->get();

		// $js_variables = [
		// 	'posts' => $posts
		// ];

		return view('pages.blog.posts', compact('posts'));
	}

	public function post($id)
	{
		$post = $this->post->with('user')->whereId($id)->firstOrFail();

		return view('pages.blog.post', compact('post'));
	}

	public function create(CreatePostRequest $request)
	{
		$data = $request->all();

		dd($data);
	}
}
