<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getCurrentTime()
    {
        $currentTime = now(); // PHP'nin sunucu saati
        return response()->json(['time' => $currentTime]);
    }
}
