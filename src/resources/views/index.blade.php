@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<diV class="product-form">
    <h2 class="product-form_heading">商品一覧</h2>
    <form class="produtld-form" action="/products/register" method="get">
        @csrf
        <input class=" productld-form__delete-btn " type="submit" value="＋商品を追加">
    </form>
    <div class="product-inner">
        <div class="product-inner_form">
            <form class="search-form" action="/products/search" method="get">
                @csrf
                <input class="search-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索" value="{{request('keyword')}}">
                <input class="search-form__seach-btn" type="submit" value="検索">

                <h3 class="product-view_heading">価格順で表示</h3>
                <select class="turn-form__select" name="sort" id="sort">
                    <option disabled selected>価格で並べ替え</option>
                    <option value="1" name="desc" {{ isset($select) && $select == '1' ? 'selected' : '' }}>高い順に表示</option>
                    <option value="2" name="asc" {{ isset($select) && $select == '2' ? 'selected' : '' }}>安い順に表示</option>
                </select>
            </form>
        </div>
        <diV class="product-list">
            @foreach ($products as $product)
            <div class="product-card">
                <a href="/products/{{ $product['id'] }}">
                    <img src="{{ '/storage/' . $product['image'] }}" alt=" 商品画像" class="product-image">
                    <p>{{ $product->name }}</p>
                    <p>￥{{ $product->price }}</p>
                </a>
            </div>
            @endforeach
        </diV>



    </diV>
    <div class="pagination">
        {{ $products->links('vendor.pagination.semantic-ui') }}

    </div>

</diV>

</div>

</div>
</div>
@endsection