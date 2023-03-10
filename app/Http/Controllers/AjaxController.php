<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Mail\ServiceForm;
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
    public function serviceForm(Request $request)
    {
        $validated            = $request->validate([
            'phone' => 'required',
            'name'  => 'required|max:255',
            'region' => 'required',
        ]);
        $validated['message'] = $request->input("message");
        Mail::to('teknokalebodrum@gmail.com')
            ->send(new ServiceForm($validated));

        return response("OK");
    }

}