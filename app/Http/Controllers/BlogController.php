<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{

    //Show Alll blog posts
    public function index(Request $request)
    {
         $response = Http::get('https://blog.kambatukebele.com/wp-json/wp/v2/posts?_embed&order=desc&orderby=date');
         $posts = $response->json();

         // Laravel pagination setup
         $perPage = 10; // Number of posts per page
         $currentPage = $request->query('page', 1);
         $items = array_slice($posts, ($currentPage - 1) * $perPage, $perPage);

         $paginatedPosts = new LengthAwarePaginator($items, count($posts), $perPage, $currentPage, [
             'path' => $request->url(),
             'query' => $request->query(),
         ]);

         return view('blog.index', compact('paginatedPosts'));
    }

    public function show($id)
    {
        // https://blog.kambatukebele.com/wp-json/wp/v2/posts?_embed&order=desc&orderby=date
        $response = Http::get("https://blog.kambatukebele.com/wp-json/wp/v2/posts/{$id}?_embed");
        $post = $response->json();

        return view('blog.show', compact('post'));
    }
}
