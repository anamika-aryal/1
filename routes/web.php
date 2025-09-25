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

// Route::get('user',[UserController::class,'getUser']);
// Route::get('user/{name}',[UserController::class,'getUsername']);
// Route::get('aboutus',[UserController::class,'about']);

// Route::get('admin',[UserController::class,'adminLogin']);

//Route::view('/abc','about');

// Route::view('/about/{name}','about');

Route::get('user-home/{user}',[UserController::class,'userHome']);
//Route::get('about-us',[UserController::class,'userAbout']);

Route::get('admin-home/{admin}',[UserController::class,'adminHome']);

Route::get('admin-dashboard/{admim}',[UserController::class,'adminHome']);

Route::get('home-page',[UserController::class,'homePage']);

Route::get('user-about',[UserController::class,'userAbout']);
