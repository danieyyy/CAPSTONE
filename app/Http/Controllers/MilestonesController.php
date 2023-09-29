<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestones;

class MilestonesController extends Controller
{
    public function index()
    {
        return view('milestone.index');
    }
}
