<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fon extends Controller
{
    public function index($id){
        return view('front.homepage');
    }
}
