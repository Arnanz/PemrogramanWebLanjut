<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'pembeli' => 'John Doe', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 2, 'pembeli' => 'Jane Doe', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 3, 'pembeli' => 'Alice', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Bob', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 2, 'pembeli' => 'Charlie', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 3, 'pembeli' => 'Dave', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Eve', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 2, 'pembeli' => 'Frank', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 3, 'pembeli' => 'Grace', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => Carbon::now()],
            ['user_id' => 1, 'pembeli' => 'Hannah', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => Carbon::now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}