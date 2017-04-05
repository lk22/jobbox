<!-- logout modal  -->
  <div id="jobsModal" class="modal" style="max-height: 100%">
      <div class="modal-content">
          <div class="job-application-list">
              <h1>Are you sure?</h1>
          </div>
      <div class="modal-footer">
        <a target="_blank" href="{{ route('new.application', Auth::user()->slug) }}" class="modal-action modal-close waves-effect waves-green btn-green"><i class="material-icons">open_in_new</i></a>
        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
     </div>
  </div>
</div>
