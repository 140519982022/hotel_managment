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

        <h2>REGISTRATION FORM</h2>
            <form   method="post"  action="{{route('user_store')}}" id="signup" role="form">
            
            @csrf
                <div class="form-group">
                    <label   for="first_name">First Name</label><br>
                    <input  type="text"  class="{{ ($errors->apply->has('first_name'))?'is-invalid form-control':'form-control' }}" id="first_name" name="first_name" placeholder="first name">
                    @if ($errors->apply->has('first_name'))
                        <span class="invalid-feedback">{{ $errors->apply->first('first_name') }}</span>
                    @endif 
                    <!-- validater (has input name) red mark -->
                </div>
                
                <div class="form-group">
                    <label   for="last_name">Last Name</label><br>
                    <input  type="text" class="{{ ($errors->apply->has('last_name'))?'is-invalid form-control':'form-control' }}"  id="last_name" name="last_name" placeholder="last name">

                    @if ($errors->apply->has('last_name'))
                        <span class="invalid-feedback">{{ $errors->apply->first('last_name') }}</span>
                    @endif 
                </div>

                <div class="form-group">
                    <label   for="gender">Gender</label><br>
                    <input  type="radio" id="gender" name="gender" value="male" class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}">
                    <label for="gender">Male</label><br>
                    <input  type="radio" id="gender" name="gender" value="female" class="{{ ($errors->apply->has('age'))?'is-invalid custom-control-input':'custom-control-input' }}">
                    <label   for="gender">Female</label><br>
                    @if ($errors->apply->has('gender'))
                    <span class="invalid-feedback" style="display:block;">{{ $errors->apply->first('gender') }}</span>
                    @endif
                </div><br>

                <div class="form-group">
                    <label>Birth Date</label>
                    <div class="input-group" id="date">
                    <input type="text" class="{{ ($errors->apply->has('dob'))?'is-invalid form-control':'form-control' }}" id ="dob" name="dob" placeholder="Select DOB" autocomplete="off">
                    <span id="dob" class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    @if ($errors->apply->has('dob'))
                        <span class="invalid-feedback">{{ $errors->apply->first('dob') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label   for="email">Email</label><br>
                    <input  type="email" class="{{ ($errors->apply->has('email'))?'is-invalid form-control':'form-control' }}" id="email" name="email" placeholder="enter email">

                    @if ($errors->apply->has('email'))
                        <span class="invalid-feedback">{{ $errors->apply->first('email') }}</span>
                    @endif 
                </div>
                
                <div class="form-group">
                    <label   for="password">Password</label><br>
                    <input  type="password" class="{{ ($errors->apply->has('password'))?'is-invalid form-control':'form-control' }}" id="password" name="password" placeholder="enter password" maxlength="8">

                    @if ($errors->apply->has('password'))
                        <span class="invalid-feedback">{{ $errors->apply->first('password') }}</span>
                    @endif 
                </div>


                <div class="form-group">
                    <label   for="clg">Choose a college name:</label><br>
                    <select class="{{ ($errors->apply->has('college_name'))?'is-invalid form-control':'form-control' }}" name="college_name"  id="clg">
                    <option selected>Choose a college name</option>
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

                <div class="form-group">
                    <label   for="branch">Choose a Branch</label><br>
                    <select  class="{{ ($errors->apply->has('branch_name'))?'is-invalid form-control':'form-control' }}" name="branch_name"  id="branch">
                    <option selected>Choose a Branch</option>
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

                <div class="form-group">
                    <label   for="mobile">mobile no.</label><br>
                    <input  type="mobile" class="{{ ($errors->apply->has('mobile'))?'is-invalid form-control':'form-control' }}" id="mobile" name="mobile" placeholder="enter mobile no." maxlength="10">
                    @if ($errors->apply->has('mobile'))
                        <span class="invalid-feedback">{{ $errors->apply->first('mobile') }}</span>
                    @endif 
                </div>

                <div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
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
</script>
@stop

