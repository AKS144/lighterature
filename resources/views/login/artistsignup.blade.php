		@include('layouts.login.header')


		<div class="wrapper">
			<div class="inner">
				<form action="{{ route('signupartiststore') }}">
					<h3>Sign Up As Artist</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Name *</label>
							<input name="name" type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-wrapper">
							<label for="">Email *</label>
							<input name="email" type="email" class="form-control" placeholder="Email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Password *</label>							
							<input name="password" type="Password" class="form-control " placeholder="Password" >
						</div>
						<div class="form-wrapper">
							<label for="">Confirm Password *</label>
							<input name="password" type="Password" class="form-control " placeholder="Confirm Password" >
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Phone No. *</label>
							<input name="mobile1" type="text" class="form-control" placeholder="Phone">
						</div>
						<div class="form-wrapper">
							<label for="">Alternate no. *</label>
							<input name="mobile2" type="text" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Agree to Terms and Conditions.
							<span class="checkmark"></span>
						</label>
					</div>
					<button data-text="Sign Up">
						<span>Sign Up</span>
					</button><br>
			
				</form>
				
			</div>
		</div>
		
				@include('layouts.login.footer')
