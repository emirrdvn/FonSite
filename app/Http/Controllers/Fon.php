<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fon extends Controller
{
    public function index(){
        return view('front.homepage');
    }
}
