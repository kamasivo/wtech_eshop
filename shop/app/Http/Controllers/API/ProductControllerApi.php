<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductControllerApi extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'size'=> 'required',
            'price' => 'required|numeric|min:1|max:50000',
            'category_id' => 'required',
            'quantity' => 'required|numeric|min:1',
            'brand' => 'required'
        ]);
        
        $product = Product::create([
            'name' => $request->name, 'description' => $request->description, 'size' => $request->size,
            'price' => $request->price, 'category_id' => $request->category_id, 'quantity' => $request->quantity, 'brand' => $request->brand
        ]);

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = Product::find($id)->images;
        foreach ($images as $img) {
            Storage::delete('public/images' . $img->path);
        }
        Image::where('product_id', $id)->delete();
        Product::find($id)->delete();

        return response()->json(['status' => 'success', 'msg' => 'Product deleted successfully']);
    }

    public function edit(Product $product)
    {
        return response()->json($product);
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

    public function getImages(Product $product)
    {
        $images = $product->images;
        foreach ($images as $img) {
            return response()->file('storage/images' . $img->path);
        }
    }

    public function deleteImage($id)
    {
        $images = Product::find($id)->images;
        foreach ($images as $img) {
            Storage::delete('public/images' . $img->path);
        }
        Image::where('product_id', $id)->delete();
    }
    /**
     * Upload a images to storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $id = $request->id;
        error_log('id produktu ' . $id);
        if ($request->hasFile('file')) {
            $image = $request->file('file')->getClientOriginalName();
            $destination_path = '/images';
            $extension = pathinfo($image, PATHINFO_EXTENSION);
            $filename = pathinfo($image, PATHINFO_FILENAME);
            $image_name  = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('file')->storeAs('public/images', $image_name);
            error_log($path);
            error_log($destination_path . '/' . $image_name);
            $returnPath = Storage::url($image_name);
        }
    }
}
