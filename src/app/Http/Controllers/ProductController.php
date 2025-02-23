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
        $product = $request->only([
            'name',
            'price',
            'image',
            'season_id',
            'description',
        ]);
        $product['image'] = $request->image->store('img', 'public');
        Product::create($product);
        return redirect('/products');
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

    public function search(ProductRequest $request)
    {
        $search = $request->input('search');
        $product = Product::where('name', $request->input)->get();
        return view('index', compact('search', 'product'));

    }

}  