<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fon;
use App\Models\fonpricesyearly;
use App\Charts\FonPriceYearly;
use App\Models\fonpricesweekly;
use App\Models\fonpricesmonthly;
class FonController extends Controller
{
    public function index($code){
        
        $fon = Fon::where('code', $code)->first();
        $fonpriceyearly = fonpricesyearly::where('name', $code)->first();
        $aylar = ['ocak', 'şubat', 'mart', 'nisan', 'mayıs', 'haziran', 'temmuz', 'ağustos', 'eylül', 'ekim', 'kasım', 'aralık'];
        $days= ['pazartesi', 'salı', 'çarşamba', 'perşembe', 'cuma', 'cumartesi', 'pazar'];
        foreach($aylar as $ay){
            $data[] = $fonpriceyearly->$ay;
        }
        $chartyearly = new FonPriceYearly;
        $chartyearly->labels($aylar);
        $chartyearly->dataset('Fon Fiyatı', 'line', $data);
        foreach($days as $day){
            $data2[] = fonpricesweekly::where('name', $code)->first()->$day;
        }
        $chartweekly= new FonPriceYearly;
        $chartweekly->labels($days);
        $chartweekly->dataset('Fon Fiyatı', 'line', $data2);

        $chartmonthly = new FonPriceYearly;
        $chartmonthly->labels($arr= range(1, 30));
        foreach($arr as $a){
            $data3[] = fonpricesmonthly::where('name', $code)->first()->$a;
        }
        $chartmonthly->dataset('Fon Fiyatı', 'line', $data3);
        
        
        
        return view('front.homepage', compact('fon', 'fonpriceyearly', 'chartyearly', 'chartweekly', 'chartmonthly'));
    }



    // public function chart($code,$charttype){
    //     // $type = $request->get('type');  // AJAX ile gelen 'type' parametresini al
    //     $fon = Fon::where('code', $code)->first();
    //     $fonpriceyearly = fonpricesyearly::where('name', $code)->first();
    //     $aylar = ['ocak', 'şubat', 'mart', 'nisan', 'mayıs', 'haziran', 'temmuz', 'ağustos', 'eylül', 'ekim', 'kasım', 'aralık'];
    //     $days= ['pazartesi', 'salı', 'çarşamba', 'perşembe', 'cuma', 'cumartesi', 'pazar'];
    //     foreach($aylar as $ay){
    //         $data[] = $fonpriceyearly->$ay;
    //     }
    //     $chartyearly = new FonPriceYearly;
    //     $chartyearly->labels($aylar);
    //     $chartyearly->dataset('Fon Fiyatı', 'line', $data);
    //     foreach($days as $day){
    //         $data2[] = fonpricesweekly::where('name', $code)->first()->$day;
    //     }
    //     $chartweekly= new FonPriceYearly;
    //     $chartweekly->labels($days);
    //     $chartweekly->dataset('Fon Fiyatı', 'line', $data2);
        
        
    //     return view('front.homepage', compact('fon', 'fonpriceyearly', 'chartyearly', 'chartweekly', 'charttype'));

    // }


}
