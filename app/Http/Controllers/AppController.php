<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }
}
