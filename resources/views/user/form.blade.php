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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="email" class="{{ ($errors->apply->has('email'))?'is-invalid form-control':'form-control' }}" id="email" name="email" placeholder="enter email" value = "<?= old('email') ?>">

                            @if ($errors->apply->has('email'))
                                <span class="invalid-feedback">{{ $errors->apply->first('email') }}</span>
                            @endif 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="clg">Choose a college name:</label><br>
                            <select class="{{($errors->apply->has('college_name'))?'is-invalid form-control':'form-control' }}" name="college_name" id="college_name">
                            <option selected disabled>Choose a college name</option>
                            <option value="kdk">K D K kannamveer dadasaheb kannamwar college of engineering</option>
                            <option value="bhagwati">bhagwati college of engineering</option>
                            <option value="Priyadarshini">main priyadarshini jl college of engineering </option>
                            <option value="pandaw">pandaw college of engineering/option>
                            <option value="sb jain">s b jain college of engineering</option>
                            </select>
                            @if ($errors->apply->has('college_name'))
                                <span class="invalid-feedback">{{ $errors->apply->first('college_name') }}</span>
                            @endif 
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="branch">Choose a Branch</label><br>
                            <select  class="{{ ($errors->apply->has('branch_name'))?'is-invalid form-control':'form-control' }}" name="branch_name"  id="branch_name">
                            <option selected disabled>Choose a Branch</option>
                            <option value="computer">computer</option>
                            <option value="electronics">electronics</option>
                            <option value="electrical">electrical </option>
                            <option value="mechanical">mechanical</option>
                            <option value="chemical">chemical</option>
                            </select>
                            @if ($errors->apply->has('branch_name'))
                                <span class="invalid-feedback">{{ $errors->apply->first('branch_name') }}</span>
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

