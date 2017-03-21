<!-- jobs list modal  -->
  <div id="jobsModal" class="modal bottom-sheet" style="max-height: 100%">
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
                                      <a href="{{ route('job', [Auth::user()->slug, $job->slug]) }}" target="_blank">
                                          {{ substr($job->title, 0, 50) }}
                                      </a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              @endif
          </div>
      <div class="modal-footer">
        <a target="_blank" href="{{ route('new.application', Auth::user()->slug) }}" class="modal-action modal-close waves-effect waves-green btn-green"><i class="material-icons">open_in_new</i></a>
        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
     </div>
  </div>
</div>