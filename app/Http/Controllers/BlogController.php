<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    //Show Alll blog posts
    public function index()
    {
        return view('blog.index');
    }

    public function singlepost()
    {
        return view('blog.single-blog'); 
    }


}
