@extends('layout.home')

@section('content')
<div class="container">

    <div class="row pd-100">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">USER PROFLE FORM</div>
                <div class="panel-body">
                    <form method="post" action="{{route('profile_store')}}" id="signup" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="first_name">First Name</label><br>
                                <input type="text" class="{{ ($errors->apply->has('first_name'))?'is-invalid form-control':'form-control' }}" id="first_name" name="first_name" placeholder="first name" value = "<?= old('first_name'); ?>" >
                                @if ($errors->apply->has('first_name'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('first_name') }}</span>
                                @endif 
                                <!-- validater (has input name) red mark -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
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
                        <div class="col-md-12">
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
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
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
                                <input type="number" name="age" id="age" class="{{ ($errors->apply->has('age'))?'is-invalid form-control':'form-control' }}" id ="age" name="age" placeholder="Enter Your Age" value="<?= old('age'); ?>" maxlength="2">
                                @if ($errors->apply->has('age'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('age') }}</span>
                                @endif
                            </div>
                        </div>                 
                    </div>                 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mobile">mobile no.</label><br>
                                <input type="mobile" class="{{ ($errors->apply->has('mobile'))?'is-invalid form-control':'form-control' }}" id="mobile" name="mobile" placeholder="enter mobile no.">
                                @if ($errors->apply->has('mobile'))
                                    <span class="invalid-feedback">{{ $errors->apply->first('mobile') }}</span>
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