<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create() {
        return 'form to create a product fromcontroller';
    }

    public function store() {
        return 'storing product from the controller';
    }

    public function show($product) {
        return view('products.show');
    }

    public function edit($product) {
        return 'showong {$product} to edit from controller';
    }
    public function update($product) {
        //
    }
   public function destroy($product) {
        //
   }
}
