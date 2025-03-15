<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supliers = [
            ['nama_suplier' => 'PT Sumber Berkah', 'kontak' => '081234567890', 'alamat' => 'Jl. Raya No. 1, Jakarta'],
            ['nama_suplier' => 'CV Maju Jaya', 'kontak' => '081345678901', 'alamat' => 'Jl. Merdeka No. 2, Bandung'],
            ['nama_suplier' => 'Toko Makmur Sentosa', 'kontak' => '081456789012', 'alamat' => 'Jl. Sejahtera No. 3, Surabaya'],
        ];

        DB::table('m_suplier')->insert($supliers);
    }
} 