<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{ 
    public function services ()
    {
        return view('services.index');
    }
    // Shopify web design
    public function shopify_web_design ()
    {
        return view('services/shopify-web-design');
    }
     // Email Marketing
    public function email_marketing ()
    {
        return view('services/email-marketing');
    }
      // Store speed optimization
    public function store_speed_optimization ()
    {
        return view('services/store-speed-optimization');
    }
      // Migration
    public function migration_to_shopify ()
    {
        return view('services/migration-to-shopify');
    }

}