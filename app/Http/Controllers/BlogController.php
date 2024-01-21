<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    //Show Alll blog posts
    public function index()
    {
        //Retrieve Only shopify Posts
        $shopify = Post::where('category', 'shopify')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();

         //Retrieve Only socialmedia Posts
        $emailMarketing = Post::where('category', 'email_marketing')
        ->where('status', 'active')
        ->latest()
        ->take(3)
        ->get();
        
        return view('blog.index', [
            'shopify'       => $shopify,
            'emailMarketing'   => $emailMarketing
        ]);
    }

    public function singleblog($id, $title)
    {
        $allPosts = Post::where('status', 'active')
        ->where('id', '!=', $id)
        ->inRandomOrder()->take(6)->get();
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