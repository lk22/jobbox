@extends('layouts.app')

@section('content')

    <div class="container grey lighten-5" id="profile">
        <div class="row">

            <div class="col s12 m10 push-m3 l10 push-l2 profile header">
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
                        <p class="auth-email">Email: <a href="mailto:{{ auth()->user()->email }}"> {{ auth()->user()->email }} </a></p>
                        <p class="auth-dream-job">Dream job: <span>{{ auth()->user()->dream_job_title }}</span></p>

                            @if(auth()->user()->has_active_email)
                                <p style="color:#2ab27b;">Bruger er aktiv</p>
                            @else
                                <p style="color:#F34C4C;">Bruger er ikke aktiv :( <span>tjek din mail</span></p>
                            @endif

                    </div>
                </div>
            </div>

            <div class="col l3 push-l2">
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
                                            <a href="{{ route('job', [Auth::user()->slug, $job->slug]) }}">
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

            <div class="col l3 push-l2">
                <p class="left-align">World</p>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a data-target="jobsModal" href="#jobsModal" class=" modal-trigger btn-floating btn-large blue job-modal-btn">
          <i class="material-icons">speaker_notes</i>
        </a>
  </div>

  <!-- jobs list modal  -->
  <div id="jobsModal" class="modal bottom-sheet">
      <div class="modal-content">
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
                                      <a href="{{ route('job', [Auth::user()->slug, $job->slug]) }}">
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
      <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
  </div>


@endsection
