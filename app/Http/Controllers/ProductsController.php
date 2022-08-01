<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    public function create(){

        return view('products.create');
    }

    public function store(){

   // dd(request(), request()->title, request()->all());
        
        $product = Product::create(request()->all());

        return $product;
    
        // $product = Product::create([
        //     'title' => request()->title,
        //     'description' => request()->desciption,
        //     'price' => request()->price,
        //     'stock' => request()->stock,
        //     'status' => request()->status,
        // ]);
    

    }


    public function show($product) {

        $product = Product::findOrFail($product);

      
        return view('products.show')->with([
            'product' => $product,

        ]);
    }

    public function edit($product){

        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
        ]);

    }

    public function update($product){

        $product = Product::findOrFail($product);
        $product->update(request()->all());

        return $product;

    }

    public function destroy($product){
        $product = Product::findOrFail($product);
        $product->delete();

        return $product;
    }

}
