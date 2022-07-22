<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if ($product->id) {
            $products = Product::all();
            return view('products.index', compact('products'));
        }
    }

    public function show($product_code)
    {
        $product = DB::table('products')->where('code', $product_code)->limit(1)->get()[0];
        return view('products.show', compact('product'));
    }

    public function edit($product_code)
    {
        $product = DB::table('products')->where('code', $product_code)->limit(1)->get()[0];
        return view("products.edit", compact("product"));
    }

    public function update($product_code)
    {

        $data = request()->validate([
            'name'         => 'string',
            'code'         => 'string',
            'preview_text' => '',
            'detail_text'  => '',
        ]);

        $product = DB::table('products')->where('code', $product_code);
        $product->update($data);
        $product = $product->get()[0];
        return view('products.show', compact('product'));
    }

    public function destroy($product_code){
        $product = DB::table('products')->where('code', $product_code)->limit(1);
        $product->delete();

        $products = Product::all();
        return view('products.index', compact('products'));
    }
}
