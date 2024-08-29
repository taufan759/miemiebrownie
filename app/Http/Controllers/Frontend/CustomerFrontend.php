<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerFrontend extends Controller
{
    public function customerdetail()
    {
        return view('frontend.customerdetail.index');
    }
}
