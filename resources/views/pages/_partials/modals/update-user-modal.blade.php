<div id="updateUserModal" class="modal">

	<div class="container modal-header">
		<h5 class="center-align">Update information on {{ Auth::user()->name }}</h5>
	</div>

	<div class="modal-content container">
		<form action="{{ route('update.user', Auth::user()->slug) }}" method="post" class="update-user-form">
			{{ csrf_field() }}

			<div class="row">
				<div class="input-field">
					<input type="text" name="firstname" placeholder="Firstname" class="firstname tooltipped validate" data-position="left" data-tooltip="The users firstname" id="first_name" value="{{ auth()->user()->firstname }}">
					<label for="first_name">First Name</label>
				</div>
			</div>

			@if(Auth::user()->middlename)
				
			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Middlename" name="middlename" class="middlename tooltipped validate" data-position="left" data-tooltip="The users middlename" id="middle_name" value="{{ auth()->user()->middlename }}">
					<label for="middle_name">First Name</label>
				</div>
			</div>

			@endif

			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Lastname" name="lastname" class="lastname tooltipped validate" data-position="left" data-tooltip="The users lastname"  id="last_name" value="{{ auth()->user()->lastname }}">
					<label for="first_name">Last name</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="email" placeholder="Email" name="email" class="email tooltiped validate" data-position="top" data-tooltip="The users email, @ sign is needed" id="email" value="{{ auth()->user()->email }}">
					<label for="first_name">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<h6>Description</h6>
					<textarea class="updateUserDescription validate" name="description" id="description" value="{{ auth()->user()->description }}" cols="10" rows="10"> {{ auth()->user()->description }} </textarea>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<select name="job_position" id="current_positions">
						@foreach($positions as $position)
							<option value="{{ $position->name }}">{{ $position->name }}</option>
						@endforeach
					</select>
					<label for="current_positions">Current position</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<select name="dream_job_title" id="DreamJob">
						@foreach($positions as $position)
							<option value="{{ $position->name }}">{{ $position->name }}</option>
						@endforeach
					</select>
					<label for="DreamJob">Dream Job Position</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<select name="company" id="companies">
						@foreach($companies as $company)
							<option value="{{ $company->name }}">{{$company->name}}</option>
						@endforeach
					</select>
					<label for="companies">Company</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="file" name="avatar" value="{{ Auth::user()->avatar }}">
					<img src="{{ Auth::user()->avatar }}" height="75" width="75" alt=""><br>
					<small>dimensions 125x125 px for your avatar is needed</small>
				</div>
			</div>

			<div class="row">
				<button data-position="right" data-tooltip="Update user Information" type="submit" class="tooltipped update-user-btn btn btn-green"><i class="material-icons">build</i></button>
			</div>
		</form>
	</div>
</div>