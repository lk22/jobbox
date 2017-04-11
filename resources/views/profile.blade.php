@extends('layouts.app')

<?php $auth = Auth::user(); ?>

@section('content')

  @if(Session::has('create_success'))
  @endif

    <div id="profile" class="container-fluid">
      <div class="row">
          @include('pages.profile.profile-info')
          @include('pages.profile.profile-job-applications')
      </div>
    </div>

    <div class="fixed-action-btn">
      <a class="btn-floating btn-large red">
        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>
        <li><a data-position="left" data-tooltip="Update Your information" data-target="updateUserModal" href="#updateUserModal" class="tooltipped floating-user-update-modal-button btn-floating red"><i class="material-icons">settings</i></a></li>
        <li><a data-position="left" data-tooltip="Job Application" data-target="jobsModal" href="#jobsModal" class="tooltipped floating-jobs-modal-btn btn-floating yellow darken-1"><i class="material-icons">assignment</i></a></li>
      </ul>
  </div>

    @include('pages._partials.modals.job-applications-modal')
    @include('pages._partials.modals.update-user-modal', $positions)
    @include('pages._partials.modals.logoutModal')

@stop
