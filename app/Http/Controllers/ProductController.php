<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function shop(){
        return view('pages.shop-page',[
            'products' => Product::all(),
        ]);
    }
    public function product(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.product-page',compact('product'));
    }
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'price' => 'required',
        ]);
        Product::create($request->all());
     
        return redirect()->route('productadmin.index')->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.product-page',compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prod = Product::find($id);
        return view('admin.product.edit',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'desc' => 'required',
            'stock' => 'required',
            'size' => 'required',
            'price' => 'required',
        ]);
        $product->update($request->all());
     
        return redirect()->route('productadmin.index')->with('success','user created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('productadmin.index')->with('success','user deleted successfully');
    }
}
