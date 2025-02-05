<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index ()
    {
        // Fetching posts from WordPress Rest API
        $response = Http::get('https://blog.kambatukebele.com/wp-json/wp/v2/posts?_embed&per_page=3&order=desc&orderby=date');
         $posts = $response->json();

        // Fetching Porfolio model, Getting the latest 6 portfolio items
        $portfolioItems = Portfolio::latest()->take(6)->get();
        return view('home', [
            'posts' => $posts,
            'portfolios' => $portfolioItems
        ]);
    }
}
