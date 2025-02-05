<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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
            'challenges' => 'required|string',
            'issues' => 'required|string',
            'services_provided' => 'required|string',
            'solution' => 'required|string',
            'technology' => 'required|string',
            'link' => 'url:http,https',
            'owner_testimonial' => 'required|string',
        ]);

         //Check the image Featured Image
        $featured_image = "fea_". time().'.'.$request->featured_image->extension();//Get the extension
        $request->featured_image->move(public_path('uploads'), $featured_image); //Move the image

        $portfolio = new Portfolio();

        $portfolio->featured_image = $featured_image;

        $portfolio->company_name = $request->company_name;
        $portfolio->company_description = $request->company_description;
        $portfolio->challenges = $request->challenges;
        $portfolio->issues = $request->issues;
        $portfolio->services_provided = $request->services_provided;
        $portfolio->solution = $request->solution;
        $portfolio->technology = Str::lower($request->technology);
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
            'company_name' => 'required|string',
            'company_description' => 'required|string',
            'featured_image' => 'image|mimes:jpg,jpeg,png,webP',
            'challenges' => 'required|string',
            'issues' => 'required|string',
            'services_provided' => 'required|string',
            'solution' => 'required|string',
            'technology' => 'required|string',
            'link' => 'url:http,https',
            'status' => 'string',
            'owner_testimonial' => 'required|string',
        ]);

        if(!$request->featured_image == null){
            //Remove the actual image
            if(file_exists(public_path() . '/uploads/' . $portfolio->featured_image)){
                unlink(public_path() . '/uploads/' . $portfolio->featured_image);
            }
            //Check ghe image
            $featured_image = time().'.'.$request->featured_image->extension();//Get the extension
            $request->featured_image->move(public_path('uploads'), $featured_image); //Move the image
            $portfolio->featured_image = $featured_image;
        }

        $portfolio->company_name = $request->company_name;
        $portfolio->company_description = $request->company_description;
        $portfolio->challenges = $request->challenges;
        $portfolio->issues = $request->issues;
        $portfolio->services_provided = $request->services_provided;
        $portfolio->solution = $request->solution;
        $portfolio->technology = Str::lower($request->technology);
        $portfolio->link = $request->link;
        $portfolio->owner_testimonial = $request->owner_testimonial;
        $portfolio->status = $request->status;
        $portfolio->save();

        return redirect(route('portfolio'))->with('status', "Portfolio updated successfully!");
    }

    public function destroy ($id)
    {
        $portfolio = Portfolio::find($id);

        if(file_exists(public_path() . '/uploads/' . $portfolio->featured_image)){
            unlink(public_path() . '/uploads/' . $portfolio->featured_image);
        }
        $portfolio->delete();

        return redirect(route('portfolio'))->with('status', "Portfolio deleted successfully!");
    }
}
