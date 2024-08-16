<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class MitraFrontend extends Controller
{
    public function mitra()
    {
        return view('frontend.mitra.index');
    }
}
