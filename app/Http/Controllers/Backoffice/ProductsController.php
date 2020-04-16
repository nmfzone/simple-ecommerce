<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('user_id', $request->user()->id)->paginate();

        return view('backoffice.products.list', compact('products'));
    }

    public function create(Request $request)
    {
        return view('backoffice.products.create');
    }

    public function store(Request $request)
    {
        $request->user()->products()->create($request->all());

//        Product::create($request->merge([
//            'user_id' => $request->user(), // tambahkan user_id ke fillable
//        ]));

        return redirect()->route('backoffice.products.list');
    }
}
