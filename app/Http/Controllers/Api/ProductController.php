<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return validate_user();
        return Product::paginate();
    }

    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'name' => 'required|unique:products,name',
                'price' => 'required',
                'status' => 'required'
            ]
        )->validate();

        if(empty($validate)) {
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'status' => $request->status
            ]);
            return "Record inserted!";
        }else {
            return $validate;
        }


    }

    public function update($id, Request $request)
    {
        Product::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ]);
        return "Record updated";
    }

    public function delete($id)
    {
        $product = Product::findorfail($id);
        $product->delete();
        return "Record deleted";
    }
}
