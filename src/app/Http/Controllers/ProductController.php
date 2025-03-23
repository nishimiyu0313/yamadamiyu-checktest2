<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index()
    {
        $products = Product::Paginate(6);
        return view('index', compact('products'));
    }

    public function register()
    {
        $seasons = Season::all();
        return view('register', compact('seasons'));
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
        $data = Product::create($product);
        $data->seasons()->sync($request->season_id);
        return redirect('/products');
    }
    public function show($id)
    {
        $product = Product::find($id);
        $seasons = Season::all();
        return view('show', compact('product', 'seasons'));
    }

    public function update(ProductRequest $request)
    {
        $product = $request->only([
            'name',
            'price',
            'image',
            'description'
        ]);
        $product['image'] = $request->image->store('img', 'public');
        Product::find($request->id)->update($product);
        return redirect('/products');
    }

    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/products');
    }

    public function search(Request $request)
    {
        $search = $request->input('keyword');
        $products = Product::where('name', $search)->Paginate(6);
        return view('index', compact('products'));
    }

}  