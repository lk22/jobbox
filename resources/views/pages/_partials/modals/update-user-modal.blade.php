<div id="updateUserModal" class="modal">

	<div class="container modal-header">
		<h5 class="center-align">Update information on {{ Auth::user()->name }}</h5>
	</div>

	<div class="modal-content container">
		<form action="{{ route('api.update.user', Auth::user()->id) }}" class="update-user-form">
			
			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Firstname" class="validate" id="first_name" value="{{ auth()->user()->firstname }}">
					<label for="first_name">First Name</label>
				</div>
			</div>

			@if(Auth::user()->middlename)
				
			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Middlename" name="firstname" class="validate" id="middle_name" value="{{ auth()->user()->middlename }}">
					<label for="middle_name">First Name</label>
				</div>
			</div>

			@endif

			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Lastname" name="lastname" class="validate" id="last_name" value="{{ auth()->user()->lastname }}">
					<label for="first_name">Last name</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="email" placeholder="Email" name="email" class="validate" id="email" value="{{ auth()->user()->email }}">
					<label for="first_name">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<h6>Description</h6>
					<textarea class="updateUserDescription" name="description" id="description" value="{{ auth()->user()->description }}" cols="10" rows="10"> {{ auth()->user()->description }} </textarea>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<select name="current_position" id="current_positions">
						@foreach($positions as $position)
							<option value="{{ $position->id }}">{{ $position->name }}</option>
						@endforeach
					</select>
					<label for="current_positions">Current position</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<select name="dream_job_position" id="DreamJob">
						@foreach($positions as $position)
							<option value="{{ $position->id }}">{{ $position->name }}</option>
						@endforeach
					</select>
					<label for="DreamJob">Dream Job Position</label>
				</div>
			</div>

			<div class="row">
				<button data-position="right" data-tooltip="Update user Information" type="submit" class=" tooltipped btn btn-green"><i class="material-icons">build</i></button>
			</div>
		</form>
	</div>
</div>