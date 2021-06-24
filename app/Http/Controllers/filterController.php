<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filterController extends Controller
{
    public function index()
    {
        return view('filter');
    }
}
