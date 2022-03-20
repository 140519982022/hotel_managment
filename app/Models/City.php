<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cities';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['city_name','state_name','country_name'];
}
