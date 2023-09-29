<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index ()
    {
        return view('review.index');
    }

    public function store (Request $request)
    {
       
        $validate = $request->validate([
            'client_fullname' =>  [
                'required',
                'regex:/(^([a-zA-Z]+)(\d+)?$)/u'
            ],
            'client_company_name' => 'required|string',
            'client_company_link' => 'required|url:http,https',
            'client_review' => 'required|string|max:255',
            'privacy' => 'accepted',
        ]);
        $privacy = $request->has('privacy') ? true : false;

        $review = new Review;

        $review->client_fullname = $request->client_fullname;
        $review->client_company_name = $request->client_company_name;
        $review->client_company_link = $request->client_company_link;
        $review->client_review = $request->client_review;
        $review->privacy = $privacy;

        $review->save();

        return redirect()->route('review')->with('status', "Thank you, your review has been saved");
    }
    
    public function show ()
    {
        $reviews  = Review::latest()->paginate(10);
        return view('review.show', ['reviews' => $reviews]); 
    }

    public function edit(int $id)
    {
        $review = Review::find($id);
        return view('review.edit', ['review' => $review]);
    }

    public function update(Request $request, int $id)
    {
        
        $review = Review::find($id);

        $review->status = $request->status;

        $review->save();
        
        return redirect(route('review.show'))->with('status', "Review updated successfully"); 
    }

    public function destroy ($id)
    {
        return view('review.index');
    }
}