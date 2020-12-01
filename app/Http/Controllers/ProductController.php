<?php


namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = (new Product())->fill($request->all());
        $product->save();

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        $product->load('deliveries');

        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.show', $product);
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
