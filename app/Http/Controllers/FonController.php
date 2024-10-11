<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fon;
class FonController extends Controller
{
    public function index($code){
        $fon = Fon::where('code', $code)->first();
        return view('front.homepage', compact('fon'));
    }
}
