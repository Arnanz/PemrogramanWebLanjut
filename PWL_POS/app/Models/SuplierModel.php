<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplierModel extends Model
{
    use HasFactory;

    protected $table = 'm_suplier';        // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'suplier_id';  // Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['suplier_id', 'nama_suplier', 'kontak','alamat'];
}
