<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    // function about(){
    //     return 'This is about page of ';
    // }
    // function getUser(){
    //     //return 'Anamika Aryal';
    //     return view('user');
    // }

    // function getUsername($name){
    //     //return 'hello '. $name;
    //     return view('getuser',['key'=>$name]);
    // }

    // function adminLogin(){
    //     return view('admin.login');
    // }

    function userHome($username){
        return view('user',['user'=>$username]);
    }

    function userAbout(){
        return view('about');
    }

    function adminHome($admin){
        if (View::exists('admin.dashboard')){
            return view('admin.dashboard');
        }else{
            echo "<h2 style='color:red;'>View not found</h2>";
        }
        //return view('admin.home',['admin'=>$admin]);
    }

    function homePage(){
        $name="Anamika Aryal";
        $year=2024;
        $fruit=['Mango','Banana','Apple'];
        return view('home',['user'=>$name,'fruits'=>$fruit,'year'=>$year]);
    }
    
}
