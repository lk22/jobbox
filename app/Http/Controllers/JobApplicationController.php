<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

use JobDesk\JobApplication;
use JobDesk\User;

class JobApplicationController extends Controller
{
    /**
    * Constructor
    */
    public function __construct(JobApplication $job, User $user)
    {
        $this->job = $job;
        $this->user = $user;
    }

    /**
    * finding the job application by slug property
    */
    public function job($user_slug, $slug)
    {
        $user = $this->user->whereSlug($user_slug)->firstOrFail();
        $job = $this->job->whereSlug($slug)->firstOrFail();

        return $job;
    }

    /**
     * return create view
     */
    public function newJobApplication()
    {
        return view('pages.job-applications.new-application');
    }

    public function create(Request $request)
    {
        $data = $request->all();


        if($data)
        {
            $this->job->create([
                'title' => $request->get('title'),
                'body' => strip_tags($request->get('body'), ['<p>', '<h3>']),
                'user_id' => auth()->user()->id, 
            ]);
        }
    }
}
