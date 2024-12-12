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
use Carbon\Carbon;

class FonController extends Controller
{
    public function index()
    {

        $code = request('fon_code') ?? 'BIST:ZGOLD';

        $fon = Fon::where('code', $code)->first();
        $fonTemp=Fon::where('code', 'IPB')->first();

        $tableNameD = "data_{$code}_1d";
        //FON PRICES DYNAMICLY
        $fonprices = array();
        DB::table($tableNameD)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprices) {
                array_push($fonprices, $item->open);
            });
        
        //5Minutes
        $fonprice5m = array();
        $tablename5m = "data_{$code}_5m";
        DB::table($tablename5m)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprice5m) {
                array_push($fonprice5m, $item->open);
            });
        //30Minutes
        $fonprice30m = array();
        $tablename30m = "data_{$code}_30m";
        DB::table($tablename30m)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprice30m) {
                array_push($fonprice30m, $item->open);
            });
        //1Hour
        $fonprice1h = array();
        $tablename1h = "data_{$code}_1h";
        DB::table($tablename1h)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprice1h) {
                array_push($fonprice1h, $item->open);
            });
        //1Week
        $fonprice1wk = array();
        $tablename1wk = "data_{$code}_1wk";
        DB::table($tablename1wk)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprice1wk) {
                array_push($fonprice1wk, $item->open);
            });
        //1Month
        $fonprice1mo = array();
        $tablename1mo = "data_{$code}_1mo";
        DB::table($tablename1mo)
            ->orderBy('datetime', 'desc')->take(20)
            ->get()->reverse()->each(function ($item) use (&$fonprice1mo) {
                array_push($fonprice1mo, $item->open);
            });
        
        $dataforchart5m = json_encode($fonprice5m);
        $dataforchart1d=json_encode($fonprices);
        $dataforchart30m=json_encode($fonprice30m);
        $dataforchart1h=json_encode($fonprice1h);
        $dataforchart1wk=json_encode($fonprice1wk);
        $dataforchart1mo=json_encode($fonprice1mo);

        











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

        

        //sonradan eklendi

        $fonPriceLast = DB::table($tableNameD)
            ->orderByDesc('datetime')
            ->first();
        $fonPrice = $fonPriceLast->close;



        $fonPayAdet = DB::table('payAdet')
            /*->where('fon_id', $fon->id)*/
            ->orderByDesc('date')
            ->first()
            ->payAdet;

        $fonYatirimciSayisi = DB::table('yatirimciSayisi')
            /*->where('fon_id', $fon->id)*/
            ->orderByDesc('date')
            ->first()
            ->yatirimciSayisi;

        $time = new DateTime($fonPriceLast->datetime);
        
        $time = $time->format('Y-m-d');
        $time ="2024-10-13";
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

        function getDataSixMonthly($fon, $date, $diff, $column, $table)
        {
            return intval(
                round(
                    DB::table($table)
                        ->where('fon_id', $fon->id)
                        ->where(
                            'date',
                            '>=',
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
        $fonToplamDeger = [];
        for ($i = 6; $i > 0; $i--) {
            array_push($fonPayAdetMonthly, getDataMonthly(
                $fonTemp,
                $time,
                '-' . $i . ' month',
                'payAdet'
            ));

            array_push($fonYatirimciSayisiMonthly, getDataMonthly(
                $fonTemp,
                $time,
                '-' . $i . ' month',
                'yatirimciSayisi'
            ));
            array_push($fonToplamDeger, getDataSixMonthly(
                $fonTemp,
                $time,
                '-' . $i . ' month',
                'price',
                'fonprices'
            ));
        }

        $ftdforData = [];
        for ($i = 0; $i < 6; $i++)
            array_push($ftdforData, $fonPayAdetMonthly[$i] * $fonToplamDeger[$i]);

        //Fon Farkları
        $fonPriceDiffs = [];
        foreach (['1Month', '3Month', '6Month', '1Year', '3Year', '5Year'] as $diff) {
            $fonPriceDiffs[$diff] = getFonPriceDiff(
                $fonTemp,
                $time,
                '-' . substr($diff, 0, 1) . ' ' . strtolower(substr($diff, 1)),
                $fonPrice
            );
        }


        $fonVolatility = array();
        DB::table('volatility')->get()->each(function ($item) use (&$fonVolatility) {
            array_push($fonVolatility, $item->volatility);
        });
        $ftdforBarChartData = json_encode($ftdforData);
        $volatilityforAreaChart = json_encode($fonVolatility);
        $fonYatirimciSayisiMonthlyBarChart = json_encode($fonYatirimciSayisiMonthly);
        $fonPayAdetMonthlyBarChart = json_encode($fonPayAdetMonthly);



        return view('front.homepage', compact(
            'fon',
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
            'ftdforBarChartData',
            'code',
            'dataforchart5m',
            'dataforchart30m',
            'dataforchart1h',
            'dataforchart1d',
            'dataforchart1wk',
            'dataforchart1mo',


        ));
    }

    public function route2()
    {
        // return 'HERE';
        return view('front.homepage');
    }

    public function route1()
    {
        return view('front.homepage');
    }

    public function route0()
    {
        return view('front.homepage');
    }
}
