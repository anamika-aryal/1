<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function about(){
        return 'This is about page of ';
    }
    function getUser(){
        //return 'Anamika Aryal';
        return view('user');
    }

    function getUsername($name){
        //return 'hello '. $name;
        return view('getuser',['key'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }
    
}
