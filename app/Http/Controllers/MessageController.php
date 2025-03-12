<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMessageRequest;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mess = Message::all();
        return view('Contact.index', [
            'mess' => $mess,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Contact.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to send a message.');
        }


        $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);


        $message = new Message();
        $message->user_name = $request->user_name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->user_id = auth()->id();
        $message->save();

        return redirect()->route('contact.index')->with('success', 'Message sent successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
