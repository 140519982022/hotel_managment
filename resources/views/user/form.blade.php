<!-- extends the layout file which inclue the all files -->
@extends('layout.home')

@section('content')
<div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- @check blank error -->
<div class="row pd-100">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">REGISTRATION FORM</div>
            <div class="panel-body">
                <form method="post" action="{{route('sigup_store')}}" id="signup" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label><br>
                                <input type="text" class="{{ ($errors->apply->has('first_name'))?'is-invalid form-control':'form-control' }}" id="first_name" name="first_name" placeholder="first name" value = "<?= old('first_name'); ?>" >
                                @if ($errors->apply->has('first_name'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('first_name') }}</span>
                                @endif 
                                <!-- validater (has input name) red mark -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label><br>
                                <input type="text" class="{{ ($errors->apply->has('last_name'))?'is-invalid form-control':'form-control' }}"  id="last_name" name="last_name" placeholder="last name" value = "<?= old('last_name'); ?>">
                                @if ($errors->apply->has('last_name'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('last_name') }}</span>
                                @endif 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label><br>
                                <input type="radio" id="gender" name="gender" value="male" class="{{ ($errors->apply->has('age'))?'is-invalid input-control':'input-control' }}">
                                <label for="gender">Male</label><br>
                                <input  type="radio" id="gender" name="gender" value="female" class="{{ ($errors->apply->has('age'))?'is-invalid input-control':'input-control' }}">
                                <label for="gender">Female</label><br>
                                @if ($errors->apply->has('gender'))
                                <span class="invalid-feedback" style="display:block;">{{ $errors->apply->first('gender') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Birth Date</label>
                                <div id="date">
                                    <input type="text" class="{{ ($errors->apply->has('dob'))?'is-invalid form-control':'form-control' }}" id ="dob" name="dob" placeholder="Select DOB" value="<?= old('dob'); ?>" autocomplete="off">
                                    <!-- old() function is used to get old field value -->
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                        @if ($errors->apply->has('dob'))
                                            <span class="invalid-feedback">{{ $errors->apply->first('dob') }}</span>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label for="last-name">Age</label>
                                <input type="text" name="age" id="age" class="{{ ($errors->apply->has('age'))?'is-invalid form-control':'form-control' }}" id ="age" name="age" placeholder="Enter Your Age" value="<?= old('age'); ?>" maxlength="2">
                                @if ($errors->apply->has('age'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('age') }}</span>
                                @endif
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile No.</label><br>
                                <input type="mobile" class="{{ ($errors->apply->has('mobile'))?'is-invalid form-control':'form-control' }}" id="mobile" name="mobile" placeholder="enter mobile no.">
                                @if ($errors->apply->has('mobile'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('mobile') }}</span>
                                @endif 
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label><br>
                                <input type="text" class="{{ ($errors->apply->has('email'))?'is-invalid form-control':'form-control' }}" id="email" name="email" placeholder="enter email" value = "<?= old('email') ?>">

                                @if ($errors->apply->has('email'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('email') }}</span>
                                @endif 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label><br>
                                <input type="password" class="{{ ($errors->apply->has('password'))?'is-invalid form-control':'form-control' }}" id="password" name="password" placeholder="enter password" maxlength="8">

                                @if ($errors->apply->has('password'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('password') }}</span>
                                @endif 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">City</label><br>
                                <input type="text" class="{{ ($errors->apply->has('city'))?'is-invalid form-control':'form-control' }}" id="city" name="city" placeholder="enter city name" value = "<?= old('email') ?>">

                                @if ($errors->apply->has('city'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('city') }}</span>
                                @endif 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">country</label><br>
                                <select name="country" id="country" class="{{ ($errors->apply->has('country'))?'is-invalid form-control':'form-control' }}">
                                    <option  >--Select country--</option>
                                    <option value="India">India</option>
                                    <option value="America">America</option>
                                    <option value="Chaina">Chaina</option>
                                    <option value="Japan">Japan</option>
                                </select>
                            
                                @if ($errors->apply->has('country'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('country') }}</span>
                                @endif 
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  
@stop

@section('pagespecificscripts')
<!-- jquery code started for date calender -->
<script>	
    $(function() {
        $('#dob').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        changeMonth: true,
        changeYear: true
        });        
    });
</script>
<!-- jquery code ended  -->
@stop

