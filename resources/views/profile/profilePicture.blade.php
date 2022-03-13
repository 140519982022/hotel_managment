@extends('layout.home')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title mt-60">Change Profile Picture</h4>
        </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('profile-picture-update'))
                            <div class="alert {{ Session::get('alert-class') }}">
                                {{ Session::get('profile-picture-update') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile_update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" id="profile_pic" name="profile_pic">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Upload">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@stop

@section('pagespecificscripts')

@stop