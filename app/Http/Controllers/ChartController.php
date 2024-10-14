<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getChart(Request $request) {
        $type = $request->get('type');  // AJAX ile gelen 'type' parametresini al
    
        if ($type == "0") {
            // Haftalık grafiği döndür
            return $chartweekly->container();
        } else if ($type == "1") {
            // Yıllık grafiği döndür
            return $chartyearly->container();
        }
    
        // Diğer grafik türleri için de işlemler yapılabilir
    }
    

}
