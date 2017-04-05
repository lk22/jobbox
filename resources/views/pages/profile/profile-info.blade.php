<div class="row profile-info">
  <div class="col s12 m12 l3 profile-header z-depth-3">
      <div class="avatar center-align">
          <img src="{{ $auth->avatar }}" height="125" width="125" alt="">
      </div>
      <div class="information">

          <div class="name center-align">
            <p class="align-center">{{ $auth->name }}</p>
          </div>

          <div class="description center-align">
            <p class="center-align">{{ $auth->description }}</p>
          </div>

          <div class="email center-align">
            <p> Email: <a href="mailto:{{ $auth->email }}"> {{ $auth->email }}</a></p>
          </div>

          <div class="dream-job center-align">

            @if($auth->dream_job_title) <p>Dream job: {{ $auth->dream_job_title }}</p> @endif
            @if(!$auth->dream_job_title) <p></p> @endif

          </div>

          <div class="current-job center-align">
            @if($auth->job_position) <p>Working as: {{ $auth->job_position }} <br> at {{ $auth->company }}</p> @endif
            @if(!$auth->job_position) <p>You are unemployed</p> @endif
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
