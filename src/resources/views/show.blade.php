@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css')}}">
@endsection

@section('content')
<div class="detail">
    <form class="update-form" action="/products/{productld}/update" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="update-form__group">
            <label class="update-form__label" for="price">
                <span class="update-form__required">商品画像</span>
            </label>
            <div class="update-form__image-inputs">
                <input type="file" name="image" id="image">
                <img src=" {{ '/storage/' . $product['image'] }}">
                <input type="hidden" name="id" value="{{ $product['id'] }}">


            </div>
            <div class=" update-form__error-message">
                @error('image')
                {{ $message }}
                @enderror

            </div>
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="name">
                <span class="update-form__required">商品名</span>
            </label>
            <div class="update-form__name-input">
                <input class="update-form__input" name="name" id="name" value="{{ $product['name'] }}">
                <input type="hidden" name="id" value="{{ $product['id'] }}">

            </div>
            <div class="update-form__error-message">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="price">
                <span class="update-form__required">値段</span>
            </label>
            <div class="update-form__price-input">
                <input class="update-form__input" type="text" name="price" id="price" value="{{ $product['price'] }}">
                <input type="hidden" name="id" value="{{ $product['id'] }}">
            </div>
            <div class="update-form__error-message">
                @error('price')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class="update-form__group">
            <label class="update-form__label" for="season">
                <span class="update-form__required">季節</span>

            </label>
            <div class="update-form__season-inputs">
                @foreach ($seasons as $season)
                <div class="update-form__season-option">
                    <label class="update-form__season-label">
                        @if ($errors->any())
                        <input class="update-form__season-input" type="checkbox" name="season_id[]"
                            value="{{ $season->id }}"
                            {{ in_array($season->id, old('season_id', [])) ? 'checked' : '' }}>
                        @else
                        <input class="update-form__season-input" type="checkbox" name="season_id[]"
                            value="{{ $season->id }}"
                            {{ $product->seasons->contains($season->id) ? 'checked' : '' }}>
                        @endif
                        <span class="update-form__gender-text">{{ $season->name }}</span>
                    </label>
                </div>
                @endforeach
            </div>
            <div class="update-form__error-message">
                @error('season_id')
                {{ $message }}
                @enderror
            </div>
        </div>


        <div class="update-form__group">
            <label class="update-form__label" for="description">
                <span class="update-form__required">お問い合わせ内容</span>

            </label>
            <div class="updatae-form__price-inputs">
                <textarea class="update-form__textarea" name="description" id="" cols="30" rows="10">{{ $product['description'] }}
                </textarea>

                <div class="update-form__error-message">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
                <input class="update-form__btn btn" type="submit" value="変更を保存">
    </form>
    <form class="detail-form" action="/products/{productId}/delete" method="post">
        @csrf
        <div class="delete-form__button">
            <input type="hidden" name="id" value="{{ $product['id'] }}">
            <input class="delete-btn btn" type="submit" value="削除">
    </form>
    <form action="/products" method="get">
        @csrf
        <input class="update-form__btn btn" type="submit" value="戻る">
    </form>

</div>
@endsection