<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index ()
    {
        $response = Http::get('https://blog.kambatukebele.com/wp-json/wp/v2/posts?_embed&per_page=3&order=desc&orderby=date');
         $posts = $response->json();
        return view('home', [
            'posts' => $posts,
        ]);
    }
}
