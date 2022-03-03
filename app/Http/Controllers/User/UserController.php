<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Auth;
use Session;


class UserController extends Controller
{
   public function index(){
    //    echo "uvju";
    //    die();
    return view('user.index')->render(); // user is folder and index is file name
   }

   public function signupForm(){
      //    echo "uvju";
      //    die();
      return view('user.form')->render(); // user is folder and form is file name
     }

      /**
    * Store action.
    *
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request){
      $currentTime = date("Y-m-d H:i:s");
   
      $userData = $request->all();
      // dd($userData);
      $userData['password'] = (isset($userData['password']))? bcrypt($request->input('password') ) : '';
     
   $userData['token'] = $userData['_token'];
      $validator = Validator::make($userData, ['name' => 'required','password' => ['required', 'string', 'min:6'], 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 'mobile'=>['required','numeric'],'age'=>['required','numeric','min:1','max:100'],'dob'=>['required','date','before:tomorrow'],'gender'=>'required','password'=>'required','agree'=>'required'],
      
          ['name.required' => 'Name is required.','password.required' => 'New password is required.','dob.required'=>'Please select date of birth.','mobile.required'=>'Please Enter 10 digit number.','gender.required'=>'Please Select Gender.','agree.required'=>'Please Select the Checkbox to agree our terms and conditions.'
      ]);

      if ($validator->fails()) {
          return redirect('user/form')->withErrors($validator, 'apply')->withInput();
      }else{
         User::create($userData); 
         echo "data inserted successfully";          
      }

      // if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'role_id' => User::ROLE_CUSTOMER])){
      //    return redirect()->route('customer_otp');                
      // }
  }  


  public function LogIn_form(){
   //    echo "uvju";
   //    die();
   return view('user.LogIn')->render(); // user is folder and form is file name
  }
}





