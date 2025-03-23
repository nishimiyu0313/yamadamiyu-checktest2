@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/registration.css')}}">
@endsection

@section('content')


<div class="register">
    <h2 class="register__heading content__heading">商品登録</h2>
    <div class="register__inner">
        <form class=form class="register-form" action="/products/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" register-form__group">
                <label class="register-form__label" for="name">
                    商品名<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__name-inputs">
                    <input class="regoster-form__input contact-form__name-input" type="text" name="name" id="name"
                        value="{{ old('name') }}" placeholder="商品名を入力">

                </div>
                <div class="register-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror

                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="price">
                    値段<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__price-inputs">
                    <input class="regoster-form__input contact-form__price-input" type="text" name="price" id="price"
                        value="{{ old('price') }}" placeholder="値段を入力">

                </div>
                <div class="register-form__error-message">
                    @error('price')
                    {{ $message }}
                    @enderror

                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="price">
                    商品画像<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__image-inputs">
                    <input type="file" name="image" id="image"
                        value="{{ old('image') }} ">

                </div>
                <div class="register-form__error-message">
                    @error('image')
                    {{ $message }}
                    @enderror


                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="season">
                    季節<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__season-inputs">
                    @foreach ($seasons as $season)
                    <div class="update-form__season-option">
                        <label class="update-form__season-label">
                            <input class="update-form__season-input" type="checkbox" name="season_id[]"
                                value="{{ $season->id }}"
                                {{ in_array($season->id, old('season_id', [])) ? 'checked' : '' }}>
                            <span class="update-form__gender-text">{{ $season->name }}</span>
                        </label>
                    </div>
                    @endforeach
                </div>
                <div class="register-form__error-message">
                    @error('season_id')
                    {{ $message }}
                    @enderror

                </div>
            </div>


            <div class="register-form__group">
                <label class="register-form__label" for="description">
                    お問い合わせ内容<span class="register-form__required">※</span>
                </label>
                <div class="register-form__price-inputs">
                    <textarea class="register-form__textarea" name="description" id="" cols="30" rows="10"
                        placeholder="商品の説明を入力">{{ old('description') }}</textarea>

                    <div class="register-form__error-message">
                        @error('description')
                        {{ $message }}
                        @enderror

                    </div>
                </div>
                <form action="/products" method="get">
                    @csrf
                    <input class="contact-form__btn btn" type="submit" value="戻る">
                </form>
                <input class="contact-form__btn btn" type="submit" value="登録">






        </form>
    </div>
</div>
@endsection