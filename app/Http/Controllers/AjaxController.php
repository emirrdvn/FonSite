<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fon;
use DateTime;
use Carbon\Carbon;

class AjaxController extends Controller
{
    public function getCurrentTime()
    {
        $currentTime = now()->format('H:i:s'); // Format:  Saat:Dakika:Saniye
        $code = request('fon_code') ?? 'IPB';

        $fon = Fon::where('code', $code)->first();
        
        
        //FON PRICES DYNAMICLY
        $fonprices = array();
        DB::table('fonprices')->where('fon_id', $fon->id)
            ->orderBy('date', 'desc')
            ->get()->each(function ($item) use (&$fonprices) {
                array_push($fonprices, $item->price);
            });
        $dataforchart = json_encode($fonprices);

        //PARA WEIGHTS
        $weights = array();
        DB::table('paradeger')->get()->each(function ($item) use (&$weights) {
            array_push($weights, $item->weight);
        });
        // Toplam tutar: 1000 TL
        $totalAmount = 1000;

        // Her bir enstrümana göre dağıtılacak tutarı hesapla
        $distribution = [];
        foreach ($weights as $label => $weight) {
            $distribution[$label] = $totalAmount * $weight;
        }
        //sonradan eklendi

        $fonPriceLast = DB::table('fonprices')
            ->where('fon_id', $fon->id)
            ->orderByDesc('date')
            ->first();
        $fonPrice = $fonPriceLast->price;



        

        
        return response()->json(['time' => $currentTime,'fon_price'=>$fonPrice]);
    }
}
