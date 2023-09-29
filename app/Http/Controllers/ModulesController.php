<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Modules;

class ModulesController extends Controller
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
        if(Auth::user()->fk_user_type_id == 1){
            return view('admin.module.index');

        } else if(Auth::user()->fk_user_type_id == 2){
            return view('home');

        } else {
            return view('home');
        }

    }
}