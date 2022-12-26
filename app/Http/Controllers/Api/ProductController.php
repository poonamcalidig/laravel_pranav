<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ]);
        return "Record inserted!";
    }

    public function update($id, Request $request)
    {
        return "hello";
        $product = Product::where('id', $id)->first();
        $product::update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ]);
    }
}
