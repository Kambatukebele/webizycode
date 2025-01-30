<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Shopify web design
    public function shopify()
    {
        return view('/');
    }
    public function wordpress ()
    {
        return view('services/wordpress');
    }
}
