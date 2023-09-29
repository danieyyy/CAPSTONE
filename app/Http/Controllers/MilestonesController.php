<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Milestones;

class MilestonesController extends Controller
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
            return view('admin.milestone.index');

        } else if(Auth::user()->fk_user_type_id == 2){
            return view('milestone.index');

        } else {
            return view('milestone.index');
        }

    }
}