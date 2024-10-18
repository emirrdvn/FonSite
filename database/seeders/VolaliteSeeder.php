<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VolaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        define("SQLFILE1", 'database\seeders\volatility1.sql');
        DB::unprepared(File::get(SQLFILE1));

        define("SQLFILE2", 'database\seeders\volatility1.sql');
        DB::unprepared(File::get(SQLFILE2));
    }
}
