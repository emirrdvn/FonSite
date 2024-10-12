<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fon;
use App\Models\fonpricesyearly;
use App\Charts\FonPriceYearly;
class FonController extends Controller
{
    public function index($code){
        $fon = Fon::where('code', $code)->first();
        $fonpriceyearly = fonpricesyearly::where('name', $code)->first();
        $aylar = ['ocak', 'şubat', 'mart', 'nisan', 'mayıs', 'haziran', 'temmuz', 'ağustos', 'eylül', 'ekim', 'kasım', 'aralık'];
        foreach($aylar as $ay){
            $data[] = $fonpriceyearly->$ay;
        }
        $chartyearly = new FonPriceYearly;
        $chartyearly->labels($aylar);
        $chartyearly->dataset('Fon Fiyatı', 'line', $data);

        return view('front.homepage', compact('fon', 'fonpriceyearly', 'chartyearly'));
    }
}
