<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public $timestamps = true;
    protected $table = "pesanan";
    // protected $fillable = ['kode_akun', 'nama_akun'];
    protected $guarded = ['id'];

    public function Produk(){
        return $this->belongsTo(Produk::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
