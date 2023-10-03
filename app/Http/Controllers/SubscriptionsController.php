<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function index ()
    {
        $subscribers = Subscriber::latest()->paginate(10);

        return view("subscribers.index", [
            'subscribers' => $subscribers,
        ]); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('status', 'You have successfully subscribed.');
    }

    public function destroy (int $id)
    {
        $subscriber = Subscriber::find($id);

        $subscriber->delete();

        return redirect()->back()->with('status', 'Subscriber deleted successfully!');
    }
}