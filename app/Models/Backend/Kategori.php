<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $timestamps = false;
    protected $table = "kategori";
    // protected $fillable = ['kode_akun', 'nama_akun'];
    protected $guarded = ['id'];
}
