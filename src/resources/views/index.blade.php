@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css')}}">
@endsection

@section('content')
<diV class="product-form">
    <h2 class="product-form_heading">商品一覧</h2>

    <input class="seach-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索">
    <input class="seach-form__seach-btn btn" type="submit" value="検索">
    </form>
    <h3 class="product-view_heading">価格順で表示</h3>
    <select class="turn-form__select" name="sort" id="sort">
        <option disabled selected>価格で並べ替え</option>
        <option value="desc">高い順に表示</option>
        <option value="asc">安い順に表示</option>
    </select>
    <form class="produtld-form" action="/products/register" method="post">
        @csrf
        <input class="productld-form__delete-btn btn" type="submit" value="＋商品を追加">
    </form>
    <diV class="product-list">
        @foreach ($products as $product)
        <div class="product-card">
            <img src="{{ $product->image }}" alt="商品画像">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}</p>
            <p>{{ $product->description }}</p>
        </div>
        @endforeach
    </diV>



    </diV>
    <div class="pagination">
        {{ $products->links('vendor.pagination.semantic-ui')}}

    </div>

</diV>

</div>


</div>
@endsection