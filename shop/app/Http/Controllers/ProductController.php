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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validations and error handling is up to you!!! ;)
        /*
    $request->validate([
        'name' => 'required|min:3',
        'description' => 'required',
    ]);
    */

        $product = Product::create(['name' => $request->name, 'description' => $request->description]);
        return response()->json(['id' => $product->id]);
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
        // validations and error handling is up to you!!! ;)
        /*
    $request->validate([
        'name' => 'required|min:3',
        'description' => 'required',
    ]);  
    */

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //delete not working
        $product->delete();
        // Product::where('id', $product)->delete();
        // error handling is up to you!!! ;)
        return response()->json(['status' => 'success', 'msg' => 'Product deleted successfully']);
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
    public function list($page)
    {
        // get rowsPerPage from query parameters (after ?), if not set => 5
        $rowsPerPage = request('rowsPerPage', 5);

        // get sortBy from query parameters (after ?), if not set => name
        $sortBy = request('sortBy', 'name');

        // get descending from query parameters (after ?), if not set => false 
        $descendingBool = request('descending', 'false');
        // convert descending true|false -> desc|asc
        $descending = $descendingBool === 'true' ? 'desc' : 'asc';

        // pagination
        // IFF rowsPerPage == 0, load ALL rows
        if ($rowsPerPage == 0) {
            // load all products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->get();
        } else {
            $offset = ($page - 1) * $rowsPerPage;

            // load products from DB
            $products = DB::table('products')
                ->orderBy($sortBy, $descending)
                ->offset($offset)
                ->limit($rowsPerPage)
                ->get();
        }

        // total number of rows -> for quasar data table pagination
        $rowsNumber = DB::table('products')->count();

        return response()->json(['rows' => $products, 'rowsNumber' => $rowsNumber]);
    }

    public function listAll()
    {
        return Product::all()->toJson(JSON_PRETTY_PRINT);
    }
}
