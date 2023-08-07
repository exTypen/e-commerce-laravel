<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $baskets = Auth::user()->baskets;
        $subtotal = 0;
        foreach ($baskets as $basket){
            $subtotal += $basket->quantity * $basket->product->price;
        }
        return view('front.checkout', compact('baskets', 'subtotal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = Auth::user()->id;
        $data['address_id'] = intval($data['address_id']);
        $data['order_status_id'] = 1;
        $order = Order::create($data);

        foreach (Auth::user()->baskets as $basket){
            $order_detail['order_id'] = $order->id;
            $order_detail['product_id'] = $basket->product_id;
            $order_detail['price'] = $basket->product->price;
            $order_detail['quantity'] = $basket->quantity;
            OrderDetail::create($order_detail);
        }

        $baskets = Auth::user()->baskets;

        return view('front.success_checkout', compact('baskets'));

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
    public function destroy(string $id)
    {
        //
    }
}
