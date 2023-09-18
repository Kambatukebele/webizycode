<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('contact-us');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' =>  [
                'required',
                'regex:/(^([a-zA-Z]+)(\d+)?$)/u'
            ],
            'email' => 'required|email',
            'company' => [
                'required',
                'regex:/(^([a-zA-Z]+)(\d+)?$)/u'
            ],
            'content' => 'required|string|max:255',
            'privacy' => 'accepted',
        ]);

        $privacy = $request->has('privacy') ? true : false; 

        $contactForm = new ContactForm; 

        $contactForm->name = $request->name;
        $contactForm->email = $request->email; 
        $contactForm->company = $request->company;
        $contactForm->content = $request->content; 
        $contactForm->privacy = $privacy; 

        $contactForm->save();

        return redirect()->route('contact.index')->with('status', 'Your message has been sent!'); 
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}