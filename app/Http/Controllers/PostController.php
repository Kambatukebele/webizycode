<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::all();
        
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'featured_image' => 'required|image|mimes:jpg,jpeg,png,webP',
            'title' => 'required|string',
            'content' => 'required',
            'author_id' => 'integer|numeric',
            'category' => 'required|string',
            'tags' => 'required|string',
        ]);

        //Check ghe image
        $featured_image = time().'.'.$request->featured_image->extension();//Get the extension
        $request->featured_image->move(public_path('uploads'), $featured_image); //Move the image

        $post = new Post;

        $post->featured_image = $featured_image;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = 1;
        $post->category = $request->category;
        $post->tags = $request->tags;

        $post->save(); 

        return redirect(route('post.index'));
 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::all()->where('id', $id); 
        return view('posts.edit', ['posts' => $posts]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = Post::find($id);
       
        //Validation
        $validated = $request->validate([
            'featured_image' => 'image|mimes:jpg,jpeg,png,webP',
            'title' => 'required|string',
            'content' => 'required',
           // 'author_id' => 'integer|numeric',
            'category' => 'required|string',
            'tags' => 'required|string',
        ]);

        if(!$request->featured_image == null){
              //Check ghe image
            $featured_image = time().'.'.$request->featured_image->extension();//Get the extension
            $request->featured_image->move(public_path('uploads'), $featured_image); //Move the image
            $posts->featured_image = $featured_image;
        }      

       
        $posts->title = $request->title;
        $posts->content = $request->content;
        //$posts->author = 1;
        $posts->category = $request->category;
        $posts->tags = $request->tags;
        $posts->status = $request->status;

        $posts->save(); 

        return redirect(route('post.index')); 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        $post->delete();

         return redirect(route('post.index')); 
    }
}
