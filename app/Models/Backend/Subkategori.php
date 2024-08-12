<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    public $timestamps = false;
    protected $table = "subkategori";
    // protected $fillable = ['kode_akun', 'nama_akun'];
    protected $guarded = ['id'];

    public function kategori(){
      return $this->belongsTo(Kategori::class);
  }

  public function subkategori(){
      return $this->hasMany(Subkategori::class);
  }
}
