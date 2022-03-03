<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
	// const ROLE_ADMIN = 1;
	// const ROLE_CUSTOMER = 2;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['id','first_name','last_name','gender','dob','token','email','password','college_name','branch_name','mobile'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
    */
    
    protected $hidden = ['password'];

	/**
     * Get the comments for the blog post.
     */
    // public function passwordResets()
    // {
	// 	return $this->hasMany('App\Models\PasswordReset' ,'email','email');
    // }
}

