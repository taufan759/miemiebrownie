<?php

namespace App\Models;

use App\Models\Backend\Produk;
use App\Models\Backend\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = ['customer_id', 'product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

