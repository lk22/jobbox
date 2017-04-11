<?php

namespace JobDesk\Http\Controllers;

use Illuminate\Http\Request;

use Session;

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

        return view('pages.job-applications.job-application', compact('user', 'job'));
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
                'body' => $request->get('body'),
                'user_id' => auth()->user()->id,
            ]);

            $create_success = Session::flash('create_success', 'Din nye job-ansøgning er tilføjet og gemt se i dine ansøgninger for nye tilføjet ansøgning');
        }

        return redirect(route('home'))->with(['create_success' => $create_success]);
    }

    public function downloadJobApplication($slug)
    {
        $job = $this->job->whereSlug($slug)->firstOrFail();

        $header = $this->job->allowPDFDownload();

        return response()->download($job);
    }
}
