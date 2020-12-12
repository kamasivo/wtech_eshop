<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // $images = Image::all();
        // return view('productPage.index', compact('products', $products, 'images', $images));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //work on store, not working
        $product = Product::find($id);
        $images = Product::find($id)->images;
        $count = 1;
        return view('productDetail.index', compact('product', $product, 'images', $images, 'count', $count));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $id)
    {
    }

    public function addToCart($id, Request $request)
    {
        $request->all();
        $count = request()->has('count') ? request()->get('count') : 1;

        $uid = Auth::id();
        DB::table('carts')->insert([
            'user_id' => $uid,
            'product_id' => $id,
            'count' => $count,
        ]);
        return redirect('cart');
    }

    public function plus($id, $count)
    {
        $count = $count + 1;

        $product = Product::find($id);
        $images = Product::find($id)->images;
        return view('productDetail.index', compact('product', $product, 'images', $images, 'count', $count));
    }

    public function minus($id, $count)
    {
        $count = $count - 1;

        $product = Product::find($id);
        $images = Product::find($id)->images;
        return view('productDetail.index', compact('product', $product, 'images', $images, 'count', $count));
    }
}
