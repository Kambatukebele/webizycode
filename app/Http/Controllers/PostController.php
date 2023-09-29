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
        $posts = Post::latest()->paginate(10);
        
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

        return redirect(route('post.index'))->with('status', 'Post saved successfully!');
 
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
       
        $posts = Post::find($id); 

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
            
            if(file_exists(public_path() . '/uploads/' . $posts->featured_image)){
                unlink(public_path() . '/uploads/' . $posts->featured_image);
            }
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

        return redirect(route('post.index'))->with('status', 'Post updated successfully!'); 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $post = Post::find($id);
        if(file_exists(public_path() . '/uploads/' . $post->featured_image)){
            unlink(public_path() . '/uploads/' . $post->featured_image);
        }
        $post->delete();

         return redirect(route('post.index'))->with('status', 'Post deleted successfully!'); 
    }
}