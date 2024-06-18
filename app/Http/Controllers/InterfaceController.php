<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function slider() {
        $sliders = Slider::all();
        $products = Product::latest()->get();
        return view('posts.index', compact('sliders','products'));

    }
    public function boxes() {
        //
    }
}
