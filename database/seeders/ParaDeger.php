<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ParaDeger extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paradeger')->insert([
            'name' => 'Dolar',
            'code' => 'USD',
            'weight' => 0.3,
            'date' => '2024-10-16',
        ]);
        DB::table('paradeger')->insert([
            'name' => 'Euro',
            'code' => 'Eur',
            'weight' => 0.25,
            'date' => '2024-10-16',
        ]);
        DB::table('paradeger')->insert([
            'name' => 'İSTANBUL PORTFÖY BİRİNCİ DEĞİŞKEN FON',
            'code' => 'IPB',
            'weight' => 0.15,
            'date' => '2024-10-16',
        ]);
        DB::table('paradeger')->insert([
            'name' => 'Bist30',
            'code' => 'XU030',
            'weight' => 0.20,
            'date' => '2024-10-16',
        ]);
        DB::table('paradeger')->insert([
            'name' => 'Bist100',
            'code' => 'XU100',
            'weight' => 0.10,
            'date' => '2024-10-16',
        ]);
    }
}
