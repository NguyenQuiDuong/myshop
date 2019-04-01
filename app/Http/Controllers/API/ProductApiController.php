<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\ProductCollectionResource;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(123);
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
        $product = Product::findOrFail($id);
        return response($product);
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
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $barcode
     * @return \Illuminate\Http\Response
     */
    public function barcode(Request $request,$barcode){
        $isTypeahead=false;
        $product = new Product();
        if ($request['typeahead']){
            $isTypeahead = $request['typeahead'];
        }
        if ($isTypeahead){
            $products = $product->where('barcode','like',"%$barcode%")->get();
            return response($products);
        }else{
            $product = $product->where('barcode','=',$barcode)->first();
            return response($product);
        }
    }
}
