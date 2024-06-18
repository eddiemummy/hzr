<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(10);
        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        return view('products.create',['categories' => $categories, 'colors' => $colors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
           'category_id' => 'required',
            'name' => 'string|required',
            'description' => 'required',
            'old_price' => 'numeric|nullable',
            'new_price' => 'numeric|required',
            'default_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if($request->hasFile('image')) {
            $path = Storage::disk('public')->put('product_images', $request->file('image'));
        }

       $product = Product::create([
           'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'slug' => Str::slug($request->get('name'),'-'),
            'old_price' => $request->get('old_price'),
            'new_price' => $request->get('new_price'),
            'default_image' => $path,
            'colors' => implode(",", $request->get('colors'))
       ]);


        foreach ($request->file('other') as $image) {
            // diğer görselleri burada yakalıyoruz ve tek tek alıyoruz.
            // önce diske yazılacak sonrasında ise yüklenen görselin pathi alınıp.
            // product_images db sine yaz
                $path = Storage::disk('public')->put('product_images', $image);

                ProductImage::create([
                   'product_id' => $product->id,
                   'image' => $path
                ]);
        }
        $cat = $product->category;
        $cat->count += 1;
        $cat->save();
        return redirect()->intended('/dashboard/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $colors = Color::all();
        $categories = Category::all();
        return view('products.edit', ['product' => $product, 'categories' => $categories, 'colors' => $colors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         $request->validate([
           'category_id' => 'required',
            'name' => 'string|required',
            'description' => 'required',
            'old_price' => 'numeric|nullable',
            'new_price' => 'numeric|required',
        ]);

        $product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'old_price' => $request->old_price,
            'new_price' => $request->new_price
        ]);
         return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    {

        Storage::disk('public')->delete($product->default_image);
        foreach($product->productImages as $images) {
            Storage::disk('public')->delete($images->image);
        }

        $product->delete();
        return redirect()->route('products.index');
    }
    public function display(Product $product) {
        $productImages = $product-> productImages;
        return view('products.display', ['product' => $product, 'productImages' => $productImages]);
    }

    public function delPic($id) {
        $image = ProductImage::find($id);
        Storage::disk('public')->delete($image->image);
        $image->delete();
        return back();
    }
    public function changePic(Product $product) {
        return view('products.change',['product'=>$product]);
    }
     public function updatePic(Request $request, Product $product) {
        $request->validate([
            'image' => 'image|mimes:jpeg,pngphpjpg,gif,svg,webp|max:2048',
        ]);
        $path = $product->default_image ?? null;
        if($request->hasFile('image')) {
            if($product->default_image) {
                Storage::disk('public')->delete($product->default_image);
            }
            $path = Storage::disk('public')->put('product_images', $request->file('image'));
        }
        $product->default_image = $path;
        $product->save();
        return redirect()->route('products.display', ['product' => $product]);
    }
    public function addImage(Product $product) {
            return view('products.add', ['product' => $product]);
    }

    public function storeImage(Request $request, Product $product) {
        $id = $product->id;
       foreach ($request->file('other') as $image) {
                $path = Storage::disk('public')->put('product_images', $image);

                ProductImage::create([
                   'product_id'=>$id,
                   'image' => $path
                ]);
        }
       return redirect()->route('products.display', ['product' => $product, 'productImages'=>$product->productImages]);
    }
}
