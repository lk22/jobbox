@extends('layouts.app')

<?php $auth = Auth::user(); ?>

@section('content')

    <div id="profile" class="container-fluid">
      <div class="row">
        <div class="col s3 m3 l3 profile-header z-depth-3">
            <div class="avatar center-align">
                <img src="{{ $auth->avatar }}" height="125" width="125" alt="">
            </div>
            <div class="information">

                <div class="name center-align">
                  <p class="align-center">{{ $auth->name }}</p>
                </div>

                <div class="email center-align">
                  <p> Email: <a href="mailto:{{ $auth->email }}"> {{ $auth->email }}</a></p>
                </div>

                <div class="dream-job center-align">

                  @if($auth->dream_job_title) <p>Dream job: {{ $auth->dream_job_title }}</p> @endif
                  @if(!$auth->dream_job_title) <p></p> @endif

                </div>

                <div class="job-applications center-align">
                  @if(count($jobs) > 1)
                    <p class="job-count">You have currently {{ count($jobs) }} job applications - <a data-target="jobsModal" href="#jobsModal" class="modal-trigger jobs-modal-btn">see here</a></p>
                  @else
                    <p class="job-count">You have currently {{ count($jobs) }} job application - <a data-target="jobsModal" href="#jobsModal" class="modal-trigger jobs-modal-btn">see here</a></p>
                  @endif
                </div>

                <div class="update-user">
                    <a data-target="updateUserModal" href="#updateUserModal" class="update-user-btn">Edit <i class="material-icons">setting</i></a>
                </div>
  
            </div>
        </div>
      </div>
    </div>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a data-target="updateUserModal" href="#updateUserModal" class=" floating-user-update-modal-button btn-floating red"><i class="material-icons">settings</i></a></li>
        <li><a data-target="jobsModal" href="#jobsModal" class="floating-jobs-modal-btn btn-floating yellow darken-1"><i class="material-icons">assignment</i></a></li>
        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
      </ul>
  </div>

    @include('pages._partials.modals.job-applications-modal')
    @include('pages._partials.modals.update-user-modal')

@stop
