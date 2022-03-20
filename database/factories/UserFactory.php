<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker)
 {
    return [
       
        'first_name'=> $faker->name,
        'last_name'=> $faker->name,
        'gender'=>array_rand(['male'=>'male','female'=>'female']),
        'dob'=>date($format = 'Y-m-d',$min = '2000'),
        'token' => Str::random(20),
       'email'  => $faker->unique()->safeEmail,
       'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'age'=>rand (10 , 99),	
        'mobile' => $faker->numberBetween(9158111452,9158991475),
       'city' => 'nagpur',
        'country' => 'india', 
    ];
});
