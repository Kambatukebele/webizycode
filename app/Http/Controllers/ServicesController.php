<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class ServicesController extends Controller
{
    // Shopify web design
    public function shopify()
    {
        return view('/');
    }
    public function wordpress ()
    {
        // Fetching Porfolio model, Getting the latest 6 portfolio items
        $portfolioItems = Portfolio::latest()->take(6)->get();
        return view('services/wordpress', ['portfolios' => $portfolioItems]);
    }
}
