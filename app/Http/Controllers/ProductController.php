<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $dati = $request->all();
        $new_product = new Product();
        $new_product->fill($dati);
        $new_product->save();
        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        if(empty($product)) {
          abort(404);
        }
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
      if(empty($product)) {
        abort(404);
      }
      return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $dati = $request->all();
        $product->fill($dati);
        $product->update();
        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        if(empty($product)) {
          abort(404);
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
