<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForecastingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['tanggal' => '2021-06-02', 'harga' => 232],
            ['tanggal' => '2021-06-03', 'harga' => 234],
            ['tanggal' => '2021-06-04', 'harga' => 234],
            ['tanggal' => '2021-06-07', 'harga' => 232],
            ['tanggal' => '2021-06-08', 'harga' => 228],
            ['tanggal' => '2021-06-09', 'harga' => 226],
            ['tanggal' => '2021-06-10', 'harga' => 226],
            ['tanggal' => '2021-06-11', 'harga' => 230],
            ['tanggal' => '2021-06-14', 'harga' => 230],
            ['tanggal' => '2021-06-15', 'harga' => 226],
            ['tanggal' => '2021-06-16', 'harga' => 214],
            ['tanggal' => '2021-06-17', 'harga' => 232],
            ['tanggal' => '2021-06-18', 'harga' => 228],
            ['tanggal' => '2021-06-21', 'harga' => 226],
            ['tanggal' => '2021-06-22', 'harga' => 222],
            ['tanggal' => '2021-06-23', 'harga' => 236],
            ['tanggal' => '2021-06-24', 'harga' => 232],
            ['tanggal' => '2021-06-25', 'harga' => 224],
            ['tanggal' => '2021-06-28', 'harga' => 238],
            ['tanggal' => '2021-06-29', 'harga' => 238],
            ['tanggal' => '2021-06-30', 'harga' => 238],
            ['tanggal' => '2021-07-01', 'harga' => 238],
            ['tanggal' => '2021-07-02', 'harga' => 240],
            ['tanggal' => '2021-07-05', 'harga' => 238],
            ['tanggal' => '2021-07-06', 'harga' => 240],
            ['tanggal' => '2021-07-07', 'harga' => 238],
            ['tanggal' => '2021-07-08', 'harga' => 236],
            ['tanggal' => '2021-07-09', 'harga' => 250],
            ['tanggal' => '2021-07-12', 'harga' => 246],
            ['tanggal' => '2021-07-13', 'harga' => 258],
            ['tanggal' => '2021-07-14', 'harga' => 262],
            ['tanggal' => '2021-07-15', 'harga' => 268],
            ['tanggal' => '2021-07-16', 'harga' => 274],
            ['tanggal' => '2021-07-19', 'harga' => 322],
            ['tanggal' => '2021-07-21', 'harga' => 368],
            ['tanggal' => '2021-07-22', 'harga' => 362],
            ['tanggal' => '2021-07-23', 'harga' => 432],
            ['tanggal' => '2021-07-26', 'harga' => 540],
            ['tanggal' => '2021-07-27', 'harga' => 590],
            ['tanggal' => '2021-07-28', 'harga' => 580],
            ['tanggal' => '2021-07-29', 'harga' => 580],
            ['tanggal' => '2021-07-30', 'harga' => 600],
        ];

        foreach ($data as $entry) {
            Forecasting::create($entry);
        }
    }
}
