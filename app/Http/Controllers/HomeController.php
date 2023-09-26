<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         //echo ' user type id ' . Auth::user()->fk_user_type_id;
        
         echo 'ID of the User:'. Auth::id();

        if(Auth::user()->fk_user_type_id == 1){

            echo "You are admin";
            return view('admin.index');

        } else if(Auth::user()->fk_user_type_id == 2){
            echo "You are staff";
            return view('home');

        } else {

            echo "You are an editor";
            return view('home');
        }


     
    }


    public function test()
    {
        //echo 'this is my test';
        return view('test');
    }


    public function hello()
    {
        //echo 'this is my test';
        return view('home.test');
    }


    public function myform()
    {
        $test = 'Capstone PRoject';
        $arr  = array('test1','test2','test3'); 

        return view('home.myform', compact('test','arr'));
    }

}
