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

        //Retrieve Only JavasScript Posts
        $javascript = Post::where('category', 'javascript')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();

        //Retrieve Only PHP Posts
        $php = Post::where('category', 'php')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();

        //Retrieve Only WordPress Posts
        $wordpress = Post::where('category', 'wordpress')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();

        //Retrieve Only shopify Posts
        $shopify = Post::where('category', 'shopify')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();

         //Retrieve Only socialmedia Posts
        $socialmedia = Post::where('category', 'socialmedia')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();
        
        return view('blog.index', [
            'laravel'       => $laravel, 
            'reactjs'       => $reactjs,
            'javascript'    => $javascript,
            'php'           => $php,
            'wordpress'     => $wordpress,
            'shopify'       => $shopify,
            'socialmedia'   => $socialmedia
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

    public function category($category)
    {
        $postCategory = Post::where('category', $category)
        ->where('status', 'active')
        ->latest()->paginate(10);
        return view('blog.category', ['postCategory' => $postCategory]); 
    }


}