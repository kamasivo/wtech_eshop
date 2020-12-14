<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Request;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
    /**
     * Product paginate
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function paging(Request $request, $id)
    {
        $sort = request()->has('sort') ? request()->get('sort') : 'asc';

        $products = Product::where('category_id', $id)->where(function($query){
            $priceFrom = request()->has('priceFrom') ? request()->get('priceFrom') : null;
            $priceTo = request()->has('priceTo') ? request()->get('priceTo') : null;
                 
            if(isset($priceFrom)){
                    $query->Where('price', '>=', $priceFrom);
            }
            if(isset($priceTo)){
                $query->Where('price', '<=', $priceTo);
            }
        })->where(function($query){
            $size = request()->has('size') ? request()->get('size') : null;    
            if(isset($size)){
                foreach ($size as $s) {
                    $query->orWhere('size', '=', $s);
                }
            }
        })->where(function($query){
            $brands = request()->has('brand') ? request()->get('brand') : null;    
            if(isset($brands)){
                foreach ($brands as $brand) {
                    $query->orWhere('brand', '=', $brand);
                }
            }
        })->orderby('price', $sort)->paginate(6);
        
        $brands = Product::select('brand')
                ->where('category_id', '=', $id)
                ->groupBy('brand')
                ->get();
        $sizes = Product::select('size')
                ->where('category_id', '=', $id)
                ->groupBy('size')
                ->get();

        $category = Category::select('name')->where('id', '=', $id)
                    ->first();

        $images = Image::all();
        
        if(count($products) > 0){
            return view('productPage.index', compact('category', 'products', 'images', 'sizes', 'brands')); 
        }
        else{
            $message = "Nenašli sa žiadne produkty :(";
            return view('productPage.index', compact('category', 'sizes', 'brands',  'message')); 
        }
    }

    public function search(Request $request)
    {
        $hidefilter = 1;
        $search_product = request()->get('search');
        $sort = request()->has('sort') ? request()->get('sort') : 'asc';
        if($search_product != ''){
            $products = Product::where('name', 'ILIKE', '%'. $search_product .'%')
                    ->orderby('price', $sort)
                    ->paginate(6);
            if(count($products) > 0){
                $images = Image::all();
                return view('productPage.index', compact('products', 'images', 'hidefilter')); 
            }
            else{
                $message = "Nenašli sa žiadne produkty :(";
                return view('productPage.index', compact('message', 'hidefilter')); 
            }

        }
    }
}
