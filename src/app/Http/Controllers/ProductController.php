<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Model\Season;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function  index()
    {
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    public function register()
    {
        return view('register');
    }

    public function store(ProductRequest $request)
    {
        Product::create(
            $request->only([
                'name',
                'price',
                'image',
                'season_id',
                'description',
            ])
            );
            return view('index');
    }
    public function show($productId)
    {        
        return view('detail');
    }

    public function update(ProductRequest $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'season_id',
            'description'
        ]);
    }
}  