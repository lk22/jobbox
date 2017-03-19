<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;
use JobDesk\User;
use JobDesk\Post;
use JobDesk\JobApplication;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Post $post, JobApplication $jobApplication)
    {
        $this->user = $user;
        $this->post = $post;
        $this->jobApplication = $jobApplication

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
}
