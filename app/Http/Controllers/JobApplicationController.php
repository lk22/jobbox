<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

use JobDesk\JobApplication;

class JobApplicationController extends Controller
{
    /**
    * Constructor
    */
    public function __construct(JobApplication $job)
    {
        $this->job = $job;
    }

    /**
    * finding the job application by slug property
    */
    public function job($slug)
    {
        $job = $this->job->whereSlug($slug)->firstOrFail();

        return $job;
    }
}
