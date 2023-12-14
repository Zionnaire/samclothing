<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //Contact us page
    public function contact()
    {
        return view('/pages/contact');
    }


    //Send message to admin
    public function sendMessage(Request $request)
{
    // Validate the incoming request data
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'special_note' => 'required',
        'category' => 'required',
        'phone' => 'required',
    ]);

    // Prepare data to be sent in the email
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'category' => $request->category,
        'special_note' => $request->special_note,
        'phone' => $request->phone,
    ];

    try {
        // Send the email using Laravel Mail
        Mail::send('pages.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('zionnaire2018@gmail.com'); // Replace with the actual admin email
            $message->subject('Message from Contact Form');
            $message->replyTo($data['email']);
        });

        // Save the message to the database
        Message::createFromForm($data);

        // Redirect with success message on successful email sending
        return redirect('/contact')->with('success', 'Message Sent Successfully!');
    } catch (\Exception $e) {
        // Log any exceptions that occur during email sending

        // Redirect with error message in case of failure
        return redirect('/contact')->with('error', 'Failed to send message. Please try again later.');
    }
}

    
}

