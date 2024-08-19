<?php

namespace App\Models\Backend;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;
    protected $table = "customer";
    protected $guarded = ['id'];

    // Jika Anda memerlukan field lain yang bersifat mass assignable
    protected $fillable = ['nama', 'email', 'hp', 'password'];

    // Jika Anda ingin menyembunyikan field tertentu dari array yang dikonversi ke JSON
    protected $hidden = ['password', 'remember_token'];
}
