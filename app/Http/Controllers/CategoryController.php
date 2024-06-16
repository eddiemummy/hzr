<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|unique:categories|max:255',
        ]);
       Category::create([
           'name'=>$request->name,
           'slug'=>Str::slug($request->input('name'),'-')
       ]);
        return redirect()->intended('dashboard/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
           'name' => 'required'
        ]);

        $category->update([
            'name' => $request->name,
            'slug'=>Str::slug($request->input('name'),'-')
        ]);
        return redirect()->intended('dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    // without resource
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->intended('dashboard/categories');
    }

}
