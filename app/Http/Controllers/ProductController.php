<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        return view("products.create");
    }

    public function store()
    {
        $data = request()->validate([
            'name'         => 'string',
            'code'         => 'string',
            'preview_text' => '',
            'detail_text'  => '',
        ]);

        $product = Product::create($data);
        if($product->id){
            $products = Product::all();
            return view('products.index', compact('products'));
        }
    }
}
