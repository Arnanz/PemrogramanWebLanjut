<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Televisi', 'harga_beli' => 1000000, 'harga_jual' => 1500000],
            ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Laptop', 'harga_beli' => 5000000, 'harga_jual' => 7000000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Sofa', 'harga_beli' => 500000, 'harga_jual' => 750000],
            ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Meja', 'harga_beli' => 300000, 'harga_jual' => 500000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Kemeja', 'harga_beli' => 100000, 'harga_jual' => 200000],
            ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Celana', 'harga_beli' => 150000, 'harga_jual' => 250000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Sepatu Olahraga', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Sandal', 'harga_beli' => 50000, 'harga_jual' => 100000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 15000, 'harga_jual' => 30000],
            ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Mie Goreng', 'harga_beli' => 15000, 'harga_jual' => 30000],
        ];
        DB::table('m_barang')->insert($data);
    }
}