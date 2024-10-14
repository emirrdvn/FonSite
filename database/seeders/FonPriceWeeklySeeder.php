<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\fonpricesweeklies;

class FonPriceWeeklySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fonpricesweeklies')->insert([
            'name' => 'IPB',
            'pazartesi' => 4,
            'salı' => 2,
            'çarşamba' => 3,
            'perşembe' => 6,
            'cuma' => 5,
            'cumartesi' => 3,
            'pazar' => 7,
        ]);
        DB::table('fonpricesweeklies')->insert([
            'name' => 'IIH',
            'pazartesi' => 5,
            'salı' => 2,
            'çarşamba' => 6,
            'perşembe' => 6,
            'cuma' => 5,
            'cumartesi' => 6,
            'pazar' => 7,
        ]);
    }
}
