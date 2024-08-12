<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $timestamps = true;
    protected $table = "produk";
    // protected $fillable = ['kode_akun', 'nama_akun'];
    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
