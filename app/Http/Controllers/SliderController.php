<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('slider.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)    {


        $request->validate([
           'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'highlight' => 'required',
            'button' => 'nullable|string',
            'link' => 'nullable|string',
        ]);
        $path = null;
        if($request->hasFile('image')) {
            $path = Storage::disk('public')->put('slider_images', $request->file('image'));
        }

        Slider::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$path,
            'highlight'=>$request->highlight,
            'button'=>$request->button,
            'link'=>$request->link
        ]);
        return redirect()->intended('dashboard/sliders')->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', ['slider'=>$slider]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
           'title' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'highlight' => 'required',
            'button' => 'nullable',
            'link' => 'nullable',
        ]);
        $path = $slider->image ?? null;
        if($request->hasFile('image')) {
            if($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }
            $path = Storage::disk('public')->put('slider_images', $request->file('image'));
        }
        $slider->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path,
            'highlight' => $request->highlight,
            'button' => $request->button,
            'link' => $request->link,
        ]);
        return redirect()->intended('dashboard/sliders')->with('success', 'Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Slider $slider)
    {
       if ($slider->image) {
            Storage::disk('public')->delete($slider->image);

        }
        $slider->delete();
        return redirect()->intended('dashboard/sliders')->with('success', 'Slider deleted successfully.');

    }


}
