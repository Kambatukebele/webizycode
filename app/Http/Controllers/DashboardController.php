<?php

namespace App\Http\Controllers;
use App\Models\Youtube;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        // $countYoutube = Youtube::count();
        // $countPortfolio = Post::count();
        // $countContact = Post::count();
        // $countSubscriber = Youtube::count();
        return view("dashboard", [
            // 'portfolios' => $countPortfolio,
            // 'youtubes' => $countYoutube,
            // 'contacts' => $countContact,
            // 'subscribers' => $countSubscriber
        ]);
    }
}
