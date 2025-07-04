<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

class BarangModel extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'barang_id',
        'barang_kode',
        'barang_nama',
        'harga_beli',
        'harga_jual',
        'kategori_id',
        'image' // Tambahkan field untuk image
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }

    // Accessor untuk image
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $image ? asset('storage/barang/' . $image) : null,
        );
    }
}

