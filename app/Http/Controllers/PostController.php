<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;
use JobDesk\Http\Requests\CreatePostRequest;

use JobDesk\Post;

use Storage;

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

	/**
	* create new post ressource
	*/
	public function create(CreatePostRequest $request)
	{
		$data = $request->all();

		$user = $this->user->whereId(
			auth()->user()->id
		)->firstOrFail();

		dd($data); // debug we get the right data from request

		if($data)
		{
			$title = $data['title'];
			$body = $data['body'];
			$post_cover = $data['cover'];
			$user_id = $user->id;

			$this->post->createPostWith([
				'title' => $title,
				'body' => $body,
				'user_id' => $user_id,
				'post_cover' => $post_cover
			]);

			$pathFile = Storage::putFile('post_covers', $post_cover);
		}
	}
}
