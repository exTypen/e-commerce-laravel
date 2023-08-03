<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()){
            $baskets = Basket::where('user_id', Auth::user()->id)->get();
        }else{
            $baskets = session('baskets', []);
            if ($baskets == null){
                $baskets = array();
            }
            foreach ($baskets as $basket){
                $product = Product::find($basket->product_id);
                $basket->product = $product;
            }
        }
        $total_price = 0;
        foreach ($baskets as $basket){
            $total_price += $basket->product->price * $basket->quantity;
        }
        return view('front.baskets', compact('baskets', 'total_price'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $data['user_id'] = Auth::user()->id;
            $data['product_id'] = $request->product_id;
            $data['quantity'] = $request->quantity;
            if (Basket::where('user_id', $data['user_id'])->where('product_id', $data['product_id'])->count()){
                $basket_to_update = Basket::where('user_id', $data['user_id'])->where('product_id', $data['product_id'])->first();
                $basket_to_update->quantity = $basket_to_update->quantity + intval($data['quantity']);
                $basket_to_update->save();
            }else{
                Basket::create($data);
                toastr()->success('Ürün sepete eklendi', 'Başarılı');
            }
            return back();
        }else{
            $baskets = session('baskets', []);
            $data['product_id'] = $request->product_id;
            $data['quantity'] = $request->quantity;

            if(count(collect($baskets)->where('product_id', $request->product_id)->all())){
                $basket_to_update = collect($baskets)->where('product_id', $request->product_id)->first();
                $basket_to_update->quantity = $basket_to_update->quantity + intval($request->quantity);
                $updatedBasket = [];
                foreach ($baskets as $basket) {
                    if ($basket->product_id != $basket_to_update->product_id) {
                        array_push($updatedBasket, $basket);
                    }
                }
                array_push($updatedBasket, $basket_to_update);
                session(['baskets' => $updatedBasket]);
            }else{
                $basketItem = (object)$data;
                if ($baskets == null){
                    $baskets = array();
                }
                array_push($baskets, $basketItem);
                session(['baskets' => $baskets]);
            }
            return back();
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if (Auth::check()){
            $basket = Basket::find($id);
            $basket->delete();
            toastr()->success('Ürün sepetten çıkarıldı', 'Başarılı');
            return back();
        }else{
            $basket = session('baskets', []);
            $data['product_id'] = $request->product_id;
            $data['quantity'] = $request->quantity;
            $basketItem = (object)$data;
            if ($basket == null){
                $basket = array();
            }

            $updatedBasket = [];
            foreach ($basket as $item) {
                if ($item->product_id != $basketItem->product_id) {
                    array_push($updatedBasket, $item);
                }
            }
            session(['baskets' => $updatedBasket]);
            return back();
        }
    }
}
