<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use App\Models\SizeId;

class ProductController extends Controller
{
    public function index(){
        return view('index');
    }

    public function catalog(){
        $products = Product::all();
        return view('catalog', compact('products'));
    }

    public function about(){
        return view('about');
    }

    public function product($id){
        $product = Product::find($id);
        // dd($product);
        return view('product', compact('product'));
    }
}
