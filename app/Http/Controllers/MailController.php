<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function submitContact(Request $request)
    {
        $data = $request->all();

        if ($data['email'] == '') {
            return redirect()->route('contacts')->with('error', 'Please fill all required fields.');
        }

        Mail::to('lorenzo@gmail.com')->send(new ContactMail($data['name'], $data['email'], $data['message']));

        return redirect()->route('contacts')->with('success', 'The form has been submitted successfully.');
    }
}
