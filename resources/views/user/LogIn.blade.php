@extends('layout.home')

@section('content')
<div class="col-md-3"></div>
<!-- above class is used to align the panel in center -->
<div class="container">            
    <!-- to set the panel side  -->
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">Login In</div>
            <div class="panel-body">
                    <!-- login form validation -->
                    @if (\Session::has('loginError'))
                        <div class="alert alert-danger">
                            <span>{!! \Session::get('loginError') !!}</span>    
                        </div>             
                    @elseif(Session::has('reset-password'))
                        <div class="alert {{ Session::get('alert-class') }}">
                            {{ Session::get('reset-password') }}
                        </div>
                    @endif 
                    <form role="form" action="{{route('authenticate')}}" method="post" id="loginForm">
                        @csrf
                        <div class="form-group">
                            <label for="username" class="placeholder"><b>Username</b></label>
                            <input id="username" name="username" type="text" class="form-control" placeholder="User Name" value="{{old('username')}}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password" class="placeholder"><b>Password</b></label>
                            <a href="#" class="float-right">Forget Password ?</a>
                            <div class="position-relative">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                <div class="show-password">
                                    <i class="flaticon-interface"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-action-d-flex mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">                            
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                        </div>                    
                        <div class="login-account">
                            <span class="msg">Don't have an account yet ?</span>
                            <a href="{{route('signup_form')}}" id="show-signup" >Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3"></div>
@stop

@section('pagespecificscripts')
	<!--begin::Page Scripts(used by this page)-->
	<!--end::Page Scripts-->
@stop