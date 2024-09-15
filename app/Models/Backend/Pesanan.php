<?php

// Model Pesanan.php
namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'no_pesanan', 'alamat', 'metode_pembayaran', 'nama_customer',
        'jumlah_pesanan', 'total', 'status_pesanan', 'produk_id', 'user_id'
    ];

    // Relasi ke model Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(PesananItem::class, 'pesanan_id');
    }
}

