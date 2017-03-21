<div id="updateUserModal" class="modal">

	<div class="container modal-header">
		<h5 class="center-align">Update information on {{ Auth::user()->name }}</h5>
	</div>

	<div class="modal-content container">
		<form action="" class="update-user-form">
			
			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Firstname" class="validate" id="first_name" value="{{ auth()->user()->firstname }}">
					<label for="first_name">First Name</label>
				</div>
			</div>

			@if(Auth::user()->middlename)
				
			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Middlename" class="validate" id="middle_name" value="{{ auth()->user()->middlename }}">
					<label for="middle_name">First Name</label>
				</div>
			</div>

			@endif

			<div class="row">
				<div class="input-field">
					<input type="text" placeholder="Lastname" class="validate" id="last_name" value="{{ auth()->user()->lastname }}">
					<label for="first_name">Last name</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field">
					<input type="email" placeholder="Email" class="validate" id="email" value="{{ auth()->user()->email }}">
					<label for="first_name">Email</label>
				</div>
			</div>

		</form>
	</div>
</div>