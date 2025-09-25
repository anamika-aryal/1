<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () //file path
{
    return view('welcome');
});

// Route::get('/home', function () //file path
// {
//     return view('homepage');
// });


//redirect
//Route::redirect('/home','/');

// Route::view('/home','homepage');
//Route::get('/about/{name}',function($name){
    //echo $name;
   // return view('about',['name'=>$name]);
//});

Route::get('user',[UserController::class,'getUser']);
Route::get('user/{name}',[UserController::class,'getUsername']);
Route::get('aboutus',[UserController::class,'about']);

Route::get('admin',[UserController::class,'adminLogin']);

