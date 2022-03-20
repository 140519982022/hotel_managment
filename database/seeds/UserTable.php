<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Component\Helper;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'first_name'=> 'name',
        'last_name'=>'name',
        'gender'=>array_rand(['male'=>'male','female'=>'female']),
        'dob'=>date($format = 'Y-m-d',$min = '2000'),
        'token' => Str::random(20),
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'age'=>rand(10 , 99),	
        'mobile' =>rand(9158111452,9158991475),
        'city' => 'nagpur',
        'country' => 'india', 
        ]);
    
    }
}
