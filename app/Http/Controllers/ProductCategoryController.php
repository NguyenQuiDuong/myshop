<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::orderby('id','desc')->paginate(5);
        return view('productcategories.index')->with('product_categories', $product_categories);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $category = ProductCategory::findOrFail($id);

        return view ('productcategories.show', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories = ProductCategory::pluck('name','id');
        return view('productcategories.create')->with('product_categories',$product_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        //Validating title and body field
        $this->validate($request, [
            'parent_id'=>'nullable|numeric',
            'name'=>'required|max:100',
            'description' =>'',
        ],ProductCategory::MESSAGES);

        $category = ProductCategory::create($request->all());

        //Display a successful message upon save
        return redirect()->route('categories.index')
            ->with('flash_message', 'Category,
             '. $category->name.' created');
    }

    public function edit($id) {
        $category = ProductCategory::findOrFail($id);
        $product_categories = ProductCategory::pluck('name','id');
        $product_categories->prepend('Please select one option','');
        return view('productcategories.edit', compact('category'))->with('product_categories',$product_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'name'=>'required|max:100',
            'description'=>'required',
            'parent_id'=>'nullable|numeric'
        ],ProductCategory::MESSAGES);

        $category = ProductCategory::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->parent_id = $request->input('parent_id');
        $category->save();

        return redirect()->route('categories.index')->with('flash_message',
            'Article, '. $category->title.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('flash_message',
                'Category successfully deleted');

    }
}
