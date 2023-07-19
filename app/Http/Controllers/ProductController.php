<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product_management.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.product_management.products.product', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($data['name']);
        $data['price'] = floatval(str_replace(',', '.', $data['price']));
        $product = Product::create($data);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->extension();
            $image->move(public_path('images'), $image_name);
            $product_image = [
                'image_path' => $image_name,
                'product_id' => $product->id
            ];
            ProductImage::create($product_image);
        }

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('front.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.product_management.products.product', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($data['name']);
        $data['price'] = floatval(str_replace(',', '.', $data['price']));
        Product::find($id)->update($data);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time().'.'.$image->extension();
            $image->move(public_path('images'), $image_name);
            $product_image = [
                'image_path' => $image_name,
                'product_id' => intval($id)
            ];
            ProductImage::create($product_image);
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
