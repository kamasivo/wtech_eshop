<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::id();
        $cart = Cart::where('user_id', '=', $uid)->get();
        $products = array();
        $sum = 0;
        foreach ($cart as $c) {
            array_push($products, Product::find($c->product_id));
            $sum += Product::find($c->product_id)->price;
        }
        return view('cart.index', compact('sum', $sum, 'products', $products, 'cart', $cart));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function remove($id)
    {
        Cart::where('product_id', $id)->delete();
        return redirect('cart');
    }

    public function removeAll()
    {
        Cart::truncate();
        return redirect('cart');
    }

    public function delete()
    {
        Cart::truncate();
        return redirect('orders');
    }

    public function plus($id, $count)
    {
        $count = $count + 1;
        Cart::where('product_id', '=', $id)->update(['count' => $count]);
        return redirect('/cart');
    }

    public function minus($id, $count)
    {
        $count = $count - 1;
        Cart::where('product_id', '=', $id)->update(['count' => $count]);
        return redirect('/cart');
    }
}
