@extends('layouts.app')

@section('content')

    <div class="container" id="home">
        <div class="row">

            <div class="col s12 m12 l12 profile header">

            </div>

            <div class="col l6">
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
                                            <td> {{ $job->id }} </td>
                                            <td> <a href="#">{{ substr($job->title, 0, 50) }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endif
                    </div>
                </div>
            </div>

            <div class="col l6">
                <p class="text-center">World</p>
            </div>
        </div>
    </div>

@endsection
