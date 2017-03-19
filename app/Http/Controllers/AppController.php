<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

use JobDesk\User;
use JobDesk\Post;
use JobDesk\JobApplication;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post, JobApplication $job)
    {
        $this->user = $user;
        $this->post = $post;
        $this->job = $job;

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = $this->job->whereUserId( auth()->user()->id )->with('user')->get();

        return view('home', compact('jobs'));
    }
}
