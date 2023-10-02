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
        return View('contact-us.contact-us');
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
            'content' => 'required|string',
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
    public function show()
    {
        $conctacts = ContactForm::latest()->paginate(10);
        return view("contact-us.show", [
            'contacts' => $conctacts
        ]);
    }

    public function view_contact(int $id)
    {
        $contact = ContactForm::find($id);
        return view("contact-us.view_contact", [
            "contact" => $contact
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $contact = ContactForm::find($id);

        $contact->delete();

        return redirect(route('contact.show'))->with("status", "Message deleted successfully"); 
    }
}