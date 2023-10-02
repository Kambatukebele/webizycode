<?php

namespace App\Http\Controllers;

use App\Helpers\VideoHelper;
use App\Models\Youtube;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $youtubes = Youtube::latest()->paginate(10);

        return view('youtube.index', [
            'youtubes' =>$youtubes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('youtube.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'youtube_link' => 'required|url:https'
        ]);

        $youtube = new Youtube();

        $youtube->title = $request->title;
        $youtube->youtube_link = $request->youtube_link;
       
        $youtube->save();

        return redirect(route('youtube.index'))->with('status', "Youtube post saved successfully!"); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $youtubes = Youtube::where('status', 'active')
        ->latest()
        ->paginate(10);
        $url = ""; 
        foreach ($youtubes as  $youtube) {
            $url = $youtube->youtube_link;
        }
        // Extract the video ID from the URL
        $videoId = VideoHelper::getVideoId($url);

        return view('youtube.show', [
            'youtubes' => $youtubes,
            'videoId' => $videoId
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $youtube = Youtube::find($id);

        return view("youtube.edit", ['youtube' => $youtube]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $validated = $request->validate([
            'title' => 'required|string',
            'youtube_link' => 'required|url:https',
            'status' => 'string'
        ]);

        $youtube = Youtube::find($id);


        $youtube->title = $request->title;
        $youtube->youtube_link = $request->youtube_link;
        $youtube->status = $request->status;
       
        $youtube->save();

        return redirect(route('youtube.index'))->with('status', "Youtube post saved successfully!"); 


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $youtube = Youtube::find($id);

        $youtube->delete();

        return redirect(route('youtube.index'))->with('status', "Youtube post saved successfully!");
    }
}