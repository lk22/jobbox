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
                        <h6 class="auth-email">Email: {{ auth()->user()->email }}</h6>
                        <h6 class="auth-dream-job">Dream job: <span>{{ auth()->user()->dream_job_title }}</span></h6>

                            @if(auth()->user()->has_active_email)
                                <span class="new badge blue">Bruger er aktiv</span>
                            @else
                                <span class="badge red">Bruger er ikke aktiv</span> <span> tjek din mail </span>
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
                                    <td>Job Title</td>
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
