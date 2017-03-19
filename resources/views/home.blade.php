@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="home">
        <div class="row">

            <div class="col s12 m12 l12 profile header">

            </div>

            <div class="col l4 push-l2">
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
                                            <td> <a href="#">{{ substr($job->title, 0, 50) }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col l4 push-l2">
                <p class="text-center">World</p>
            </div>
        </div>
    </div>

@endsection
