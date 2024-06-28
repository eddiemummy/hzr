<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function sendMail(Request $request) {

    $validated = $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ]);

        Mail::to("feynmansphysics@gmail.com")->send(new ContactMail($validated));
        return redirect()->back()->with('success', 'Bizimle iletişime geçtiğiniz için teşekkür ederiz!');
    }

}
