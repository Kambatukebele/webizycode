<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    //Show Alll blog posts
    public function index()
    {
        //Retrieve only Laravel Posts
        $laravel = Post::where('category', 'laravel')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();
        //Retrieve only Reactjs Posts
        $reactjs = Post::where('category', 'reactjs')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();
        
        return view('blog.index', [
           
            'laravel' => $laravel, 
            'reactjs'=>$reactjs,
        ]);
    }

    public function singleblog($id, $title)
    {
        $allPosts = Post::latest()->take(6)->get();
        $blog = Post::find($id);
        return view('blog.single-blog', [
            'blog' => $blog,
             'allPosts' => $allPosts,
        ]); 
    }

    public function category()
    {
        return view('blog.category'); 
    }


}