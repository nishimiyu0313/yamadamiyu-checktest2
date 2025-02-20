<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Model\Season;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index()
    {
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    public function register(Request $request)
    {
        $products = $request->all();
        return view('register', compact('products'));
    }

    public function store($request)
    {
        Product::create(
            $request->only([
                'name',
                'price',
                'image',
                'description',
            ])
            );
            return view('index');
    }
    public function detail()
    {
        return view('detail');
    }

    public function update($request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);
    }




}
    