@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="home">
        <div class="row">


            <div class="col l6 push-l2">
                <div class="row">
                    <div class="job-application-list">
                        <!-- applications list goes here -->
                        <!--
                            make applications model
                            make controller
                            make table for job applications
                        -->
                        @if (count($jobs))
                            <table class="responsive-table">
                                <thead>
                                    <td>Job Title</td>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td> <a href="#">{{ substr($job->title, 0, 50) }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col l6 push-l3">
                <p class="text-center">World</p>
            </div>
        </div>
    </div>

@endsection
