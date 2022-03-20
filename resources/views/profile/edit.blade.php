@extends('layout.home')
@section('content')
<div class="col-md-2"></div>			
<div class="container pd-100">
	<div class="col-md-9">
		<div class="row">			
			<div class="panel panel-primary">
				<div class="panel-heading">Update User</div>				
				<div class="panel-body">
					<!-- Alert message (start) -->
						@if(Session::has('message'))
							<div class="alert {{ Session::get('alert-class') }}">
								{{ Session::get('message') }}
							</div>
						@endif
					<!-- Alert message (end) -->
					<form role="form" action="{{route('user_update')}}" method="post" id="store">
						@csrf
						<div class="row">
							<div class="avatar avatar-xl">
								<img src="{{asset('/images/profile_picture/'.auth()->user()->profile_pic)}}" alt="..." class="profile-picture">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="first-name">First Name</label>
									<input type="text" id="first_name" name="first_name" class="{{ ($errors->apply->has('first_name'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your First Name" value="{{$user->first_name}}">
									@if ($errors->apply->has('first_name'))
										<span class="invalid-feedback">{{ $errors->apply->first('first_name') }}</span>
									@endif
								</div>
							</div>					
							<div class="col-md-6">
								<div class="form-group">
									<label for="first-name">Last Name</label>
									<input type="text" id="last_name" name="last_name" class="{{ ($errors->apply->has('last_name'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Full Name" value="{{$user->last_name}}">
									@if ($errors->apply->has('last_name'))
										<span class="invalid-feedback">{{ $errors->apply->first('last_name') }}</span>
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
											<input class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}" type="radio" value="male" id="male" name="gender" <?= ($user->gender == "male")?'checked':""?>>
											<label class="custom-control-label" for="male">Male</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}" type="radio" value="female" id="female" name="gender" <?= ($user->gender == "female")?'checked':""?>>
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
									<input type="text" name="age" id="age" class="{{ ($errors->apply->has('age'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Age" value="{{$user->age}}" maxlength="3">
									@if ($errors->apply->has('age'))
										<span class="invalid-feedback">{{ $errors->apply->first('age') }}</span>
									@endif
								</div>
							</div>
						</div>
					
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Date of Birth</label>
									<div class="form-group" id="date">
										<input type="text" class="{{ ($errors->apply->has('dob'))?'is-invalid form-control':'form-control' }}" id ="dob" name="dob" placeholder="Select DOB" autocomplete="off" value="{{$user->dob}}">
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
									<input type="text" name="mobile" id="mobile" class="{{ ($errors->apply->has('mobile'))?'is-invalid form-control':'form-control' }}" placeholder="Enter Your Phone Number" value="{{$user->mobile}}"  maxlength="10">
									@if ($errors->apply->has('mobile_no'))
										<span class="invalid-feedback">{{ $errors->apply->first('mobile_no') }}</span>
									@endif
								</div>
							</div>
						</div>
						<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label><br>
                                    <select name="city" id="city" class="{{ ($errors->apply->has('city'))?'is-invalid form-control':'form-control' }}" value = "{{$user->city}}">
                                    <option value="">Select City</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id}}" {{($city->id == $user->city)? 'selected':''}}>{{$city->city_name}}</option>
                                    @endforeach                                  
                                </select>
                                @if ($errors->apply->has('city'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('city') }}</span>
                                @endif 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label><br>
                                <select name="state" id="state" class="{{ ($errors->apply->has('state'))?'is-invalid form-control':'form-control' }}" value ="{{$user->state}}">									
                                    <option value="">Select States</option>
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}" {{($state->id == $user->state)? 'selected':''}}>{{$state->state_name}}</option>
                                    @endforeach
                                </select>                            
                                @if ($errors->apply->has('state'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('state') }}</span>
                                @endif 
                            </div>
                        </div>
                    </div>     
						<div class="row">						
							<div class="col-md-6">
								<div class="form-group">
									<button class="btn btn-primary" type="submit">Update</button>
									<!-- update profile picture button -->
									<a href="{{route('profile_image')}}"><button class="btn btn-info" type="button">Update profile Picture</button></a>								
								</div>
							</div>
						</div>								
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>
<div class="col-md-2"></div>

@stop

@section('pagespecificscripts')
<script>	
	$(function() {
		$('#dob').datepicker({
	        format: "yyyy/mm/dd",
	        autoclose: true,
	    });
	});
</script>

@stop