<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\NewsLetter;
use App\Models\Product;
use App\Models\ProductSegment;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $sliders = Slider::all();
        $products = Product::latest();

        $newProducts = $products->limit(10)->get();
        $products = $products->get();

        $segments = [];

        foreach (ProductSegment::all() as $item) {
            $productList = Product::whereIn("id", explode(",", $item->products))->get();
            $segments[$item->segment] = $productList;
        }

        return view('posts.index', compact('sliders', 'products', 'newProducts', 'segments'));

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
