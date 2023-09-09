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

    public function singleblog($id, $title)
    {
        return view('blog.single-blog', ['id' => $id, 'title' => $title]); 
    }

    public function category()
    {
        return view('blog.category'); 
    }


}