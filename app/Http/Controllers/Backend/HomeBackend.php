<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeBackend extends Controller
{
    public function index()
{
    $userName = 'Team Miemie Brownie'; 

    return view('backend.home.index', [
        'judul' => 'Beranda',
        'sub' => 'Data Beranda',
        'userName' => $userName 
    ]);
}

   
}
