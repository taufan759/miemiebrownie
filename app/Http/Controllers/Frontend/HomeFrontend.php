<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Berita;

use Illuminate\Http\Request;

class HomeFrontend extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.home.index', compact('berita'));
    }
}
