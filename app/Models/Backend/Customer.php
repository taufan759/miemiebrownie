<?php

namespace App\Models\Backend;
use App\Models\Cart;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    protected $table = "customer";
    protected $guarded = ['id'];

    protected $fillable = ['nama', 'email', 'hp', 'alamat', 'jenis_kelamin', 'sosmed', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function cartItems()
{
    return $this->hasMany(Cart::class, 'customer_id');
}

// Model Cart
public function product()
{
    return $this->belongsTo(Produk::class, 'product_id');
}
}
