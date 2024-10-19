<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Fon;
use App\Models\fonprices;
use Illuminate\Support\Facades\DB;
use Attribute;
use League\CommonMark\Extension\Attributes\Node\Attributes;
use DateTime;

class FonController extends Controller
{
    public function index($code)
    {

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
        
        $weightsforchart = json_encode($distribution);

        $yedigunluk = json_encode(array_slice($fonprices, 0, 7));
        
        //sonradan eklendi

        $fonPriceLast = DB::table('fonprices')
            ->where('fon_id', $fon->id)
            ->orderByDesc('date')
            ->first();
        $fonPrice = $fonPriceLast->price;

        $time = new DateTime($fonPriceLast->date);

        $fonPayAdet = DB::table('payAdet')
            ->where('fon_id', $fon->id)
            ->orderByDesc('date')
            ->first()
            ->payAdet;

        $fonYatirimciSayisi = DB::table('yatirimciSayisi')
            ->where('fon_id', $fon->id)
            ->orderByDesc('date')
            ->first()
            ->yatirimciSayisi;

        $time = $time->format('Y-m-d');

        function getFonPriceDiff($fon, $date, $diff, $fonPrice)
        {
            $fonPriceOld = DB::table('fonprices')
                ->where('fon_id', $fon->id)
                ->where(
                    'date',
                    (new DateTime($date))->modify($diff)->format('Y-m-d')
                )
                ->first()
                ->price;

            return number_format(($fonPrice - $fonPriceOld) / $fonPriceOld * 100, 2);
        }

        function getDataMonthly($fon, $date, $diff, $column)
        {
            return intval(
                round(
                    DB::table($column)
                        ->where('fon_id', $fon->id)
                        ->where(
                            'date',
                            '>',
                            (new DateTime($date))->modify($diff)->format('Y-m-d')
                        )
                        ->where(
                            'date',
                            '<',
                            (new DateTime($date))->modify($diff)->modify('+1 month')->format('Y-m-d')
                        )
                        ->avg($column)
                )
            );
        }

        $fonPayAdetMonthly = [];
        $fonYatirimciSayisiMonthly = [];
        for ($i = 6; $i > 0; $i--) {
            array_push($fonPayAdetMonthly, getDataMonthly(
                $fon,
                $time,
                '-' . $i . ' month',
                'payAdet'
            ));

            array_push($fonYatirimciSayisiMonthly, getDataMonthly(
                $fon,
                $time,
                '-' . $i . ' month',
                'yatirimciSayisi'
            ));
        }
        //Fon Farkları
        $fonPriceDiffs = [];
        foreach (['1Month', '3Month', '6Month', '1Year', '3Year', '5Year'] as $diff) {
            $fonPriceDiffs[$diff] = getFonPriceDiff(
                $fon,
                $time,
                '-' . substr($diff, 0, 1) . ' ' . strtolower(substr($diff, 1)),
                $fonPrice
            );
        }

        $fonVolatility=array();
        DB::table('volatility')->get()->each(function ($item) use (&$fonVolatility) {
            array_push($fonVolatility, $item->volatility);
        });
        
        $volatilityforAreaChart= json_encode($fonVolatility);
        $fonYatirimciSayisiMonthlyBarChart = json_encode($fonYatirimciSayisiMonthly);
        $fonPayAdetMonthlyBarChart = json_encode($fonPayAdetMonthly);
        return view('front.homepage', compact(
            'fon',
            'dataforchart',
            'fonPrice',
            'time',
            'fonPayAdet',
            'fonYatirimciSayisi',
            'fonPriceDiffs',
            'fonPayAdetMonthly',
            'fonYatirimciSayisiMonthly',
            'fonYatirimciSayisiMonthlyBarChart',
            'fonPayAdetMonthlyBarChart',
            'weightsforchart',
            'volatilityforAreaChart',
            'yedigunluk'
        ));
    }
}
