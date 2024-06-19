<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\NewsLetter;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        $products = Product::latest()->get();
        return view('posts.index', compact('sliders','products'));

    }
   public function contact() {
        $contact = Contact::latest()->first();
        return view('posts.contact', ['contact' => $contact]);
    }
    public function aboutStore() {
        $about = About::first();
        return view('posts.about', ['about' => $about]);
    }
    public function store(Request $request) {
        $validation = $request->validate([
           'email' => 'required|email'
        ]);
        NewsLetter::create($validation);
        return back();
    }
}
