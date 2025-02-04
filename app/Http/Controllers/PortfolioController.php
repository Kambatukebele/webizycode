<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index ()
    {
        $portfolios = Portfolio::latest()->paginate(10);

        return view('portfolio.index', ['portfolios' => $portfolios]);
    }

    public function show ()
    {
        $portfolios = Portfolio::latest()->paginate(10);

        return view('portfolio.show', ['portfolios' => $portfolios]);

    }

    public function create ()
    {
        return view('portfolio.create');
    }

    public function store (Request $request)
    {
         $validated = $request->validate([
            'company_name' => 'required|string',
            'company_description' => 'required|string',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png,webP',
            'framed_image' => 'required|image|mimes:jpg,jpeg,png,webP',
            'image_before' => 'required|image|mimes:jpg,jpeg,png,webP',
            'image_after' => 'required|image|mimes:jpg,jpeg,png,webP',
            'challenges' => 'required|string',
            'issues' => 'required|string',
            'services_provided' => 'required|string',
            'solution' => 'required|string',
            'technology' => 'required|string',
            'link' => 'url:http,https',
            'owner_testimonial' => 'required|string',
        ]);

         //Check the image Featured Image
        $featured_image = time().'.'.$request->featured_image->extension();//Get the extension
        $request->featured_image->move(public_path('uploads'), $featured_image); //Move the image
        //Check the Framed Image
        $framed_image = time().'.'.$request->framed_image->extension();//Get the extension
        $request->framed_image->move(public_path('uploads'), $framed_image); //Move the image
         //Check the Before Image
        $image_before = time().'.'.$request->image_before->extension();//Get the extension
        $request->image_before->move(public_path('uploads'), $image_before); //Move the image
        //Check the after Image
        $image_after = time().'.'.$request->image_after->extension();//Get the extension
        $request->image_after->move(public_path('uploads'), $image_after); //Move the image

        $portfolio = new Portfolio();

        $portfolio->featured_image = $featured_image;
        $portfolio->framed_image = $framed_image;
        $portfolio->image_before = $image_before;
        $portfolio->image_after = $image_after;

        $portfolio->company_name = $request->company_name;
        $portfolio->company_description = $request->company_description;
        $portfolio->challenges = $request->challenges;
        $portfolio->issues = $request->issues;
        $portfolio->services_provided = $request->services_provided;
        $portfolio->solution = $request->solution;
        $portfolio->technology = $request->technology;
        $portfolio->link = $request->link;
        $portfolio->owner_testimonial = $request->owner_testimonial;

        $portfolio->save();

        return redirect(route('portfolio'))->with('status', "Portfolio saved successfully!");

    }

    public function single (int $id, string $title)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.single', ['portfolio' => $portfolio]);
    }

    public function edit ($id)
    {
        $portfolio = Portfolio::find($id);

        return view('portfolio.edit', ['portfolio' => $portfolio]);
    }

    public function update (Request $request, int $id)
    {
        $portfolio = Portfolio::find($id);

        //Validation
        $validated = $request->validate([
            'company_image' => 'image|mimes:jpg,jpeg,png,webP',
            'company_name' => 'required|string',
            'company_project_title' => 'required|string',
            'company_project_description' => 'required|string',
            'company_project_task' => 'required|string',
            'company_location' => 'required|string',
            'company_link' => 'url:http,https',
            'company_date_launched' => 'date',
        ]);

        if(!$request->company_image == null){
            //Remove the actual image
            if(file_exists(public_path() . '/uploads/' . $portfolio->company_image)){
                unlink(public_path() . '/uploads/' . $portfolio->company_image);
            }
            //Check ghe image
            $company_image = time().'.'.$request->company_image->extension();//Get the extension
            $request->company_image->move(public_path('uploads'), $company_image); //Move the image
            $portfolio->company_image = $company_image;
        }
        // $portfolio->company_image = $company_image;

        $portfolio->company_name = $request->company_name;
        $portfolio->company_project_title = $request->company_project_title;
        $portfolio->company_project_description = $request->company_project_description;
        $portfolio->company_project_task = $request->company_project_task;
        $portfolio->company_location = $request->company_location;
        $portfolio->company_link = $request->company_link;
        $portfolio->company_date_launched = $request->company_date_launched;
        $portfolio->status = $request->status;
        $portfolio->save();

        return redirect(route('portfolio'))->with('status', "Portfolio updated successfully!");
    }

    public function destroy ($id)
    {
        $portfolio = Portfolio::find($id);

        if(file_exists(public_path() . '/uploads/' . $portfolio->company_image)){
            unlink(public_path() . '/uploads/' . $portfolio->company_image);
        }

        $portfolio->delete();

        return redirect(route('portfolio'))->with('status', "Portfolio deleted successfully!");
    }
}
