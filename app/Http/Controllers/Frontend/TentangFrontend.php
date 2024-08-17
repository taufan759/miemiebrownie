<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class TentangFrontend extends Controller
{
    public function tentang()
    {
        return view('frontend.tentang.index');
    }
}
