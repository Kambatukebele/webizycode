<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $reviews = Review::where("status", "active")
        ->latest()
        ->take(10)
        ->get();

        return view('home', [
            'reviews' => $reviews,
        ]); 
    }
}