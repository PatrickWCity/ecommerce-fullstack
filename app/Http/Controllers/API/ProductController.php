<?php

namespace App\Http\Controllers\API;

use App\Product;
use App\Category;
use App\Http\Resources\Product as ProductResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
        //return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Stores Product from Create View
        $this->validate($request, [
            'name' => 'required|unique:products,name',
            'category' => 'required',
            'price' => 'required|numeric|digits_between:0,8'
        ]);
        
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;

        $product->save();
        return response()->json(['message' => 'OK']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  Product::find($id);
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
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric|digits_between:0,8'
        ]);
        
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;

        $product->save();

        return response()->json(['message' => 'OK']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return response()->json(['message' => 'OK']);
    }
}
