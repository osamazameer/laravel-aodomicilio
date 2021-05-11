<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('store.index', [
            'products' => $products
        ]);
    }
    public function productview($id)
    {
        $product = Product::find($id);
        return view('store.view', [
            'product' => $product
        ]);
    }
}
