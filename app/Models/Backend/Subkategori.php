<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "subkategori";
    protected $guarded = ['id'];

    // Relasi dengan model Kategori
    public function kategori(){
      return $this->belongsTo(Kategori::class);
  }
}

