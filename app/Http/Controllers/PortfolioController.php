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
            'company_image' => 'required|image|mimes:jpg,jpeg,png,webP',
            'company_name' => 'required|string',
            'company_project_title' => 'required|string',
            'company_project_description' => 'required|string',
            'company_project_task' => 'required|string',
            'company_location' => 'required|string',
            'company_link' => 'url:http,https',
            'company_date_launched' => 'date',
        ]);

         //Check ghe image
        $company_image = time().'.'.$request->company_image->extension();//Get the extension
        $request->company_image->move(public_path('uploads'), $company_image); //Move the image

        $portfolio = new Portfolio();

        $portfolio->company_image = $company_image;
        
        $portfolio->company_name = $request->company_name;
        $portfolio->company_project_title = $request->company_project_title;
        $portfolio->company_project_description = $request->company_project_description;
        $portfolio->company_project_task = $request->company_project_task;
        $portfolio->company_location = $request->company_location;
        $portfolio->company_link = $request->company_link;
        $portfolio->company_date_launched = $request->company_date_launched; 

        $portfolio->save(); 

        return redirect(route('portfolio'));
     
    }

    public function single (int $id, string $title)
    {
        $portfolio = Portfolio::find($id); 
        return view('portfolio.single', ['portfolio' => $portfolio]);
    }

    public function edit ($id)
    {
        return view('portfolio.edit');
    }

    public function update ($id)
    {
        return view('portfolio.update');
    }

    public function destroy ($id)
    {
        return view('portfolio.destroy');
    }
}