<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return response()->json($products);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
        // return $request->all();
        $product = $product->update($request->all());
        return response($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response(true);
    }
}
