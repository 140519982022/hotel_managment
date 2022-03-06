@extends('layout.home')
@section('content')

<div class="container">
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <legend style="color: green; font-weight: bold;">All User
                    </legend>
                </div>
            </div>
            <div class="card-body">

                @if(session()->has('message'))
                    <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
                @endif
                
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center">ID</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Age</th>
                            <th class="text-center">Date of Birth</th>
                            <th class="text-center">Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)  			   
                            <tr class="text-center">
                                <td class="text-center">{{ $user->id}}</td>
                                <td class="text-center">{{ $user->first_name}}</td>
                                <td class="text-center">{{ $user->last_name}}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->mobile }}</td>
                                <td class="text-center">{{ $user->gender }}</td>
                                <td class="text-center">{{ $user->age }}</td>
                                <td class="text-center">{{ $user->dob }}</td>
                                <td class="text-center">						
                                    <a href="{{ route('user_destroy',encrypt($user->id)) }}" role="button" class="btn btn-danger">Delete</a>
                                    <a href="{{ route('user_view',encrypt($user->id)) }}" role="button" class="btn btn-secondary">View</a>
                                    <a href="{{ route('user_edit',encrypt($user->id)) }}" role="button" class="btn b btn-info">Edit</a>  
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
       
</div>

@stop

@section('pagespecificscripts')
<script src="{{asset('js/sweet-alert-message.js')}}"></script>

@stop