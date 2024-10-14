<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class FonPriceMonthlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        $arr= range(1, 30);
        foreach (['IPB', 'IIH'] as $fon_code) {
            
                $data = ['name' => $fon_code];
                foreach ($arr as $a) {
                    $data[$a] = $faker->randomDigit();
                }
                DB::table('fonpricesmonthlies')->insert($data);
        }
    }
}
