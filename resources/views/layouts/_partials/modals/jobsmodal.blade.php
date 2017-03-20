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
