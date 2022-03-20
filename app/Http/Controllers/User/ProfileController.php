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
use App\Models\City;
use App\Models\States;
use Auth;
use Session;

class ProfileController extends Controller
{
   
   /** 
     * Display a listing of the resource. 
     * 
     * @return \Illuminate\Http\Response 
     */  
    public function index()  
    {  
        // User::find() find all user data
        $users = User::paginate(6);

        return view('profile.index', compact('users'));  
    }
    /** 
     * Display the specified resource.
     * 
     * @param  int  $id View data
     * @return \Illuminate\Http\Response 
     */
    public function show($id)  
    {  
        $user = User::find(decrypt($id));  
        return view('profile.view',compact('user'));
    } 
  
    /** 
     * Show the form for editing the specified resource. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function edit()  
    {  
        $user = User::find(auth()->user()->id);  
         
      $cities = City::get(['id','city_name']);  
    //   $cities = DB::table('cities')->select('id','city_name')->get();  
      $states= DB::table('states')->select('id','state_name')->get();
     return view('profile.edit', compact('user','cities','states')); 

    }  
  
    /** 
     * Update the specified resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function update(Request $request)  
    {  
        $userData = $request->except('_token');
        
        $userDetails = User::find(auth()->user()->id);
        $userData['dob'] = date('Y-m-d', strtotime($userData['dob']));// 22/02/2022 
        
        $validator = Validator::make($userData, ['first_name' => 'required','last_name' => 'required','age' => 'required','mobile'=>['required','numeric'],'dob'=>['required','date','before:tomorrow'],'gender'=>'required'],
        ['first_name.required' => 'Name is required.','dob.required'=>'Please select date of birth.','mobile.required'=>'Please Enter 10 digit number.','gender.required'=>'Please Select Gender.']);
                  
        if ($validator->fails()) {
            Session::flash('message', 'Data is not updated!');
            Session::flash('alert-class', 'alert-danger');
            return \Redirect::back()->withErrors($validator, 'apply')->withInput();
        }
        if ($userDetails->update($userData)){                  
            Session::flash('message', 'Update successfully!');
            Session::flash('alert-class', 'alert-success');
            return \Redirect::back()->withInput();
        }
        
    }
  
    /** 
     * Remove the specified resource from storage. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function destroy($id)  
    {  
        $user = User::find(decrypt($id));  
        $user->delete();
        return redirect()->route('user_index');     
    }  
    /**
     * View the profile page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profilePicture()
    {
    	return view('profile.profilePicture')->render();
    }

    /**
     * View the change profile page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changeProfilePicture(Request $request)
    {
        
        if($request->hasFile('profile_pic')){

            $profile_pic = $request->file('profile_pic');
            $filename = time(). '.' . $profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path('/images/profile_picture/'), $filename);
            // update profile picture name on data base
            User::where('id',Auth()->user()->id)->update([
                'profile_pic'=> $filename,
            ]);
            Session::flash('profile-picture-update', 'Profile Picture Update successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
        }else{
            Session::flash('profile-picture-update', 'Profile Picture Not Updated!');
            Session::flash('alert-class', 'alert-danger');
            return redirect()->back();
        }
    }
}
