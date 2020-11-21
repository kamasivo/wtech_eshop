<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

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
        //todo paging, filter, opbrazky len ti co treba
        $products = Product::where('category_id', '=', $id)->get();
        $images = Image::all();
        return view('productPage.index', compact('products', $products, 'images', $images));
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
        //treba spravit image join s produktami ktore vytiahnem

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
                /*$query->Where('size', '=', $size[0]);
                for($i = 1; $i < count($size); $i++){
                    $query->orWhere('size', '=', $size[$i]);
                }*/
                foreach ($size as $s) {
                    $query->orWhere('size', '=', $s);
                }
            }
        })->where(function($query){
            $brands = request()->has('brands') ? request()->get('brands') : null;    
            if(isset($brands)){
                foreach ($brands as $brand) {
                    $query->orWhere('brand', '=', $brand);
                }
            }
        })->orderby('price', $sort)->paginate(6);
    

        $images = Image::all();
        return view('productPage.index', compact('products', $products, 'images', $images));
    }

    public function filterPaging(Request $request, $id)
    {
        //
    }
}
