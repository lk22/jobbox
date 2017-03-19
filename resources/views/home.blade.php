@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="home">
        <div class="row">

            <div class="col s12 m10 push-m3 l10 push-l3 profile header">
                <div class="row">
                    <div class="col s2 m2 l2 avatar">
                        <div class="row">
                            <img src="{{ auth()->user()->avatar }}" height="150" width="150" alt="">
                        </div>
                    </div>
                    <div class="col s2 m4 push-m1 l4 push-l1">
                        <h5>
                            <strong>W</strong>elcome {{ auth()->user()->name }}
                        </h5>
                        <p class="auth-email">Email: <a href="mailto{{ auth()->user()->email }}"> {{ auth()->user()->email }} </a></p>
                        <p class="auth-dream-job">Dream job: <span>{{ auth()->user()->dream_job_title }}</span></p>

                            @if(auth()->user()->has_active_email)
                                <p style="color:#2ab27b;">Bruger er aktiv</p>
                            @else
                                <p style="color:#F34C4C;">Bruger er aktiv :( <span>tjek din mail</span></p>
                            @endif

                    </div>
                </div>
            </div>

            <div class="col l3 push-l3">
                <div class="row">
                    <div class="job-application-list">
                        @if (count($jobs))
                            <table class="responsive-table">
                                <thead>
                                    <td>Job Ansøgninger</td>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td>
                                                <a href="{{ route('job', $job->slug) }}">
                                                    {{ substr($job->title, 0, 50) }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col l3 push-l3">
                <p class="text-center">World</p>
            </div>
        </div>
    </div>

@endsection
