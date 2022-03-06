@extends('layout.home')
@section('content')

<div class="content">
    <div class="page-inner">
		<div class="page-header">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="col-md-12">
				<div class="row">			
					<div class="col-md-2"></div>			
					<div class="card">
						<div class="card-header">
							<div class="card-title">
								<legend style="color: green; font-weight: bold;">
									Create User
								</legend>
							</div>
						</div>
						<div class="card-body">
							<form role="form" action="{{route('user_store')}}" method="post" id="signup">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="first-name">Full Name</label>
											<input type="text" id="name" name="name" class="{{ ($errors->apply->has('name'))?'is-invalid form-control':'form-control' }}" value="<?= old('name'); ?>" placeholder="Enter Your Full Name">
											@if ($errors->apply->has('name'))
												<span class="invalid-feedback">{{ $errors->apply->first('name') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<div>
												<label for="lname">Gender:</label>
											</div>
											<div class="form-group">										
												<div class="custom-control custom-radio custom-control-inline">
													<input class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}" type="radio" value="male" id="male" name="gender">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline">
													<input class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}" type="radio" value="female" id="female" name="gender">
													<label class="custom-control-label" for="female">Female</label>
												</div>																
												@if ($errors->apply->has('gender'))
												<span class="invalid-feedback" style="display:block;">{{ $errors->apply->first('gender') }}</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="last-name">Age</label>
											<input type="number" name="age" id="age" class="{{ ($errors->apply->has('age'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Age" value="<?= old('age'); ?>" maxlength="2">
											@if ($errors->apply->has('age'))
												<span class="invalid-feedback">{{ $errors->apply->first('age') }}</span>
											@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="your-email">Email</label>
											<input type="text" name="email" id="email" class="{{ ($errors->apply->has('email'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Email Address" value="<?= old('email'); ?>">
											@if ($errors->apply->has('email'))
												<span class="invalid-feedback">{{ $errors->apply->first('email') }}</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="password">Password</label>
											<div class="input-group" >
												<input type="password" id="password" name="password" class="{{ ($errors->apply->has('password'))?'is-invalid form-control':'form-control' }}" placeholder="Enter The Password">
												<div class="input-group-text" id="show-password">
													<i class="fa fa-eye"></i>
												</div>
												@if ($errors->apply->has('password'))
													<span class="invalid-feedback">{{ $errors->apply->first('password') }}</span>
												@endif							
											</div>
										</div>								
									</div>								
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Date of Birth</label>
											<div class="input-group" id="date">
												<input type="text" class="{{ ($errors->apply->has('dob'))?'is-invalid form-control':'form-control' }}" id ="dob" name="dob" placeholder="Select DOB" value="<?= old('dob'); ?>" autocomplete="off">
												<span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
												@if ($errors->apply->has('dob'))
													<span class="invalid-feedback">{{ $errors->apply->first('dob') }}</span>
												@endif
											</div>
										</div>
									</div>
									<div class="col-md-6">	
										<div class="form-group">
											<label for="last-name">Phone Number</label>
											<input type="text" name="mobile_no" id="mobile_no" class="{{ ($errors->apply->has('mobile_no'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Phone Number" value="<?= old('mobile_no'); ?>"  maxlength="10">
											@if ($errors->apply->has('mobile_no'))
												<span class="invalid-feedback">{{ $errors->apply->first('mobile_no') }}</span>
											@endif
										</div>
									</div>
								</div>						
								<div class="card-footer">
									<div class="row">								
										<div class="col-md-6">
											<div class="form-group">
												<a href="{{route('user_index')}}" class="btn btn-danger" type="submit">Back</a>
												<button class="btn btn-primary" type="submit">Create</button>
											</div>
										</div>
									</div>
								</div>								
							</form>
						</div>
					</div>
					<div class="col-md-2"></div>	
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('pagespecificscripts')
<script>	
	$(function() {
		$('#dob').datepicker({
	        format: "yyyy/mm/dd",
	        autoclose: true,
	    });
	});
	// Show Password

	function showPassword(button) {
		var inputPassword = $(button).parent().find('input');
		if (inputPassword.attr('type') === "password") {
			inputPassword.attr('type', 'text');
			$('#show-password i').addClass("fa-eye-slash");
		} else {
			$('#show-password i').removeClass("fa-eye-slash");
			inputPassword.attr('type','password');
		}
	}
	$('#show-password').on('click', function(){
		showPassword(this);
	})
</script>

@stop