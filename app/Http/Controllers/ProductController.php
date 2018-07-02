<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\ProductImport;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $products = Product::orderby('id','desc')->paginate(5);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::pluck('name','id');
        $product_categories->prepend('Please select one option','');
        return view("products.create")->with('product_categories',$product_categories);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:100',
            'barcode'=>'required|numeric',
            'quantity'=>'required|numeric',
            'import_price'=>'required|numeric',
            'retail_price'=>'required|numeric',
            'trade_price' =>'required|numeric',
            'unit'=>'required|numeric',
            'description'=>'required',
        ]);
        $productArray = $request->all();
        $productArray['date_import'] = Carbon::parse($productArray['date_import'])->format(Carbon::DEFAULT_TO_STRING_FORMAT);

        $product = Product::create($productArray);
        $product_import = new ProductImport();
        $product_import->fill($productArray);
        $product_import->product()->associate($product);

        $user = Auth::user();
        $product_import->unit = 1;
        $product_import->user()->associate($user);
        $product_import->save();
        return redirect()->route('products.index');
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
        $product = Product::findOrFail($id);

        $product_categories = ProductCategory::pluck('name','id');
        $product_categories->prepend('Please select one option','');
        return view('products.edit', compact('product'))->with('product_categories',$product_categories);
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
        $this->validate($request,[
            'name'=>'required|max:100',
            'barcode'=>'required|numeric',
            'quantity'=>'required|numeric',
            'import_price'=>'required|numeric',
            'retail_price'=>'required|numeric',
            'trade_price' =>'required|numeric',
            'unit'=>'required|numeric',
            'description'=>'required',
        ]);
        $productArray = $request->all();
        $productArray['date_import'] = Carbon::parse($productArray['date_import'])->format(Carbon::DEFAULT_TO_STRING_FORMAT);

        $product = Product::findOrFail($id);
        $product->update($productArray);
        return redirect()->route('products.index');
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
}
