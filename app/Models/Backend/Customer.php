<?php

namespace App\Models\Backend;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; // Tambahkan jika belum ada
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
}
