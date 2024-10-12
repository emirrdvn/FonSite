<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\fonpricesyearly;

class FonPriceYearlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fonpricesyearlies')->insert([
            'name' => 'IPB',
            'ocak' => 1,
            'şubat' => 2,
            'mart' => 3,
            'nisan' => 4,
            'mayıs' => 5,
            'haziran' => 6,
            'temmuz' => 7,
            'ağustos' => 8,
            'eylül' => 9,
            'ekim' => 10,
            'kasım' => 11,
            'aralık' => 12,
        ]);
        DB::table('fonpricesyearlies')->insert([
            'name' => 'IIH',
            'ocak' => 1,
            'şubat' => 2,
            'mart' => 3,
            'nisan' => 4,
            'mayıs' => 5,
            'haziran' => 6,
            'temmuz' => 7,
            'ağustos' => 8,
            'eylül' => 9,
            'ekim' => 10,
            'kasım' => 11,
            'aralık' => 12,
        ]);
    }
}
