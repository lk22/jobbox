@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="home">
        <div class="row">
            <div class="col l3 push-l2">
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
                                            <td> {{ substr($job->title, 0, 50) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col l3 push-l2">
                <p class="text-center">World</p>
            </div>

            <div class="col l3 push-l2">
                <p class="text-center"> {{ auth()->user()->firstname }} </p>
            </div>
        </div>
    </div>

@endsection
