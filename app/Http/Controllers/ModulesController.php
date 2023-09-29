<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modules;

class ModulesController extends Controller
{
    public function index()
    {
        return view('module.index');
    }
}
