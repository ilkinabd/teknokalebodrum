<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AjaxController extends Controller
{
    public function contactForm(Request $request)
    {
        $validated            = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'name'  => 'required|max:255'
        ]);
        $validated['message'] = $request->input("message");
        Mail::to('teknokalebodrum@gmail.com')
            ->send(new ContactForm($validated));

        return response("OK");
    }
}