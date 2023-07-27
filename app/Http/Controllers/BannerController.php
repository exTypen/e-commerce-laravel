<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::get();
        return view('admin.design.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.design.banners.banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image_name = time().'.'.$image->extension();
        $image->move(public_path('images'), $image_name);
        $banner = [
            'image_path' => $image_name,
            'title' => $request->title,
            'slug' => $request->slug
        ];
        Banner::create($banner);
        toastr()->success('Banner Eklendi', 'Başarılı');
        return redirect()->route('banners.index');
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
    public function edit(string $id)
    {
        $banner = Banner::find($id);
        return view('admin.design.banners.banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = $request->file('image');
        $image_name = time().'.'.$image->extension();
        $image->move(public_path('images'), $image_name);
        $banner = [
            'id' => $id,
            'title' => $request->title,
            'image_path' => $image_name,
            'slug' => $request->slug
        ];
        Banner::find($id)->update($banner);
        toastr()->success('Banner Eklendi', 'Başarılı');
        return redirect()->route('banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
