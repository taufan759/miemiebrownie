<?php

namespace App\Models\Backend;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Cart;

class Customer extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    protected $table = 'customer';
    protected $guarded = ['id'];

    // Daftar atribut yang dapat diisi
    protected $fillable = [
        'nama', 
        'email', 
        'hp', 
        'alamat', 
        'jenis_kelamin', 
        'sosmed', 
        'password'
    ];

    // Daftar atribut yang harus disembunyikan dalam serialisasi
    protected $hidden = ['password', 'remember_token'];

    // Relasi satu ke banyak dengan model Cart
    public function cartItems()
    {
        return $this->hasMany(Cart::class, 'customer_id');
    }

    // Relasi Cart dengan model Produk (ini seharusnya di model Cart, bukan di model Customer)
    // Pindahkan fungsi ini ke model Cart
    // public function product()
    // {
    //     return $this->belongsTo(Produk::class, 'product_id');
    // }
}
