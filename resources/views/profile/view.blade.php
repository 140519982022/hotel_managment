@extends('layout.home')
@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">Update User</div>				
        </div>
        <table class="table  table-bordered table-hover">                            
            <tbody>
                <tr>
                    <th scope="col">first Name</th>
                    <td>{{$user->first_name}}</td>                    
                </tr>
                <tr>
                    <th scope="col">Last Name</th>
                    <td>{{$user->last_name}}</td>                    
                </tr>
                <tr>
                    <th scope="col">Gender</th>
                    <td>{{$user->gender}}</td>                  
                </tr>
                <tr>
                <th scope="col">Age</th>
                    <td>{{$user->age}}</td>  
                </tr>
                <th scope="col">Date of Birth</th>
                    <td>{{$user->dob}}</td>  
                </tr>
                <th scope="col">Phone Number</th>
                    <td>{{$user->mobile}}</td>  
                </tr>
            </tbody>
        </table>
        <div class="col-md-6">
            <div class="form-group">
                <a href="{{route('user_index')}}" class="btn btn-danger" type="submit">Back</a>
                <a href="{{ route('user_edit',encrypt($user->id)) }}" class="btn btn-primary">Update</a>  
            </div>
        </div>                 
    </div>
</div>
@stop

@section('pagespecificscripts')


@stop