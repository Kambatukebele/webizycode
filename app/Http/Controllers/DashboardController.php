<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Youtube;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        $countPosts = Post::count();
        $countYoutube = Youtube::count();
        $countPortfolio = Post::count();
        $countReview = Youtube::count();
        $countContact = Post::count();
        $countSubscriber = Youtube::count();
        return view("dashboard", [
            'posts' => $countPosts,
            'portfolios' => $countPortfolio,
            'youtubes' => $countYoutube,
            'reviews' => $countReview,
            'contacts' => $countContact,
            'subscribers' => $countSubscriber
        ]); 
    }
}