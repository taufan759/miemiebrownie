<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan'; 

    protected $fillable = [
        'no_pesanan',
        'alamat',
        'metode_pembayaran',
        'nama_customer',
        'produk_id',
        'harga',
        'jumlah_pesanan',
        'total',
        'status_pesanan',
        'user_id',
        'tanggal',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id'); // pastikan relasi ini benar
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // pastikan relasi ini benar
    }
}


