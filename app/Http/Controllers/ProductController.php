<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProduct()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('pages.all-product', compact('products'));
    }

    public function detail($id, $name)
    {
        $product = Product::where('id', $id)->first();
        return view('pages.product-detail', compact('product'));
    }

}
