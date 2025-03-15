<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'ELEC', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'FURN', 'kategori_nama' => 'Furniture'],
            ['kategori_kode' => 'CLTH', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'FTWR', 'kategori_nama' => 'Sepatu'],
            ['kategori_kode' => 'FD', 'kategori_nama' => 'Makanan'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}