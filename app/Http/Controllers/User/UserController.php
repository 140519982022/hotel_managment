<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
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
    * store signupform
    * @return \Illuminate\Http\Response
    */

   public function store(Request $request)
   {
      // $currentTime = date("Y-m-d H:i:s");
   
      $userData = $request->all();
      // dd($userData);
      $userData['password'] = (isset($userData['password']))? bcrypt($request->input('password') ) : '';// encrpt the password
      $userData['dob'] = date('Y-m-d', strtotime($userData['dob']));// 22/02/2022 invalid
      // expected 2022-02-21
      $userData['token'] = $userData['_token'];
      
      // check validation
      $validator = Validator::make($userData, ['first_name' => 'required','last_name' => 'required','age' => 'required','password' => ['required', 'string', 'min:6'], 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 'mobile'=>['required','numeric'],'dob'=>['required','date','before:tomorrow'],'gender'=>'required','password'=>'required'],
         ['first_name.required' => 'Name is required.','password.required' => 'New password is required.','dob.required'=>'Please select date of birth.','mobile.required'=>'Please Enter 10 digit number.','gender.required'=>'Please Select Gender.']);

      /**
       * check error and redirect to signup form
       */
      if ($validator->fails()) {
         return redirect('user/signupForm')->withErrors($validator, 'apply')->withInput();
      }else{
         User::create($userData);// this line is create the row inside the users table in database
         // echo "data inserted successfully";          
      }
      // login the user
      if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])){
         return redirect()->route('home_page');                
      }
  }  

   /**
    * Authenticate user for log in application.
    * submit the login form
    * @return \Illuminate\Http\Response
    */

    public function authenticate(Request $request)
   {
      // check the email and password from database
      if (Auth::attempt(['email' => $request->get('username'), 'password' => $request->get('password')]))
      {
         return redirect()->route('home_page');
      }else{
         return \Redirect::back()->with('loginError','Please provide valid credential.')->withInput();
      }
   }

  public function login()
  {
   //    echo "uvju";
   //    die();
   return view('user.login')->render(); // user is folder and form is file name
  }
   /**
    * Logout the user out of the application.
    *
    * @return \Illuminate\Http\Response
    */

   public function logout(){
      Auth::logout();
      return redirect()->route('home_page');
   }
  public function home()
  {
   //    echo "uvju";
   //    die();
   return view('welcome')->render(); // user is folder and form is file name
  }
  

}





