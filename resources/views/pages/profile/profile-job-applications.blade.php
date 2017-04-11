
  <div class="col s12 m12 l5 profile-job-applications z-depth-3">
      <div class="heading">
          <h5>Job ansøgniner</h5>
          <br>
          @if(count($jobs))<h6>du har {{ count($jobs) }} job ansøgning(er)</h6>@endif
      	  <br>
      	  <table class="table highlight">
      	  	@foreach($jobs as $job) 
      	  		<tr>
      	  			<td>{{$job->title}}</td>
      	  			<td>
      	  				<a class='dropdown-button' href='#' data-activates='settings'>:</a>
  	  					<!-- Dropdown Structure -->
						<ul id='settings' class='dropdown-content'>
						    <li><a href="{{ route('job', [Auth::user()->slug, $job->slug]) }}">Se ansøgning</a></li>
						    <li><a href="#!">Slet</a></li>
						</ul>
      	  			</td>
      	  		</tr>
      	  	@endforeach
      	  </table>
      </div>
  </div>
