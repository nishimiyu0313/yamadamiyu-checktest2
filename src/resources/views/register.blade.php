@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')


<div class="register">
    <h2 class="register__heading content__heading">商品登録</h2>
    <div class="register__inner">
        <form class="register-form" action="/products" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">
                    商品名<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__name-inputs">
                    <input class="regoster-form__input contact-form__name-input"  name="text" id="name"
                        value="{{ old('name') }}" placeholder="商品名を入力">

                </div>
                <div class="register-form__error-message">

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

                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="season">
                    季節<span class="register-form__required">必須</span>
                </label>
                <div class="register-form__season-inputs">
                    <div class="register-form__season-option">
                        <label class="register-form__season-label">
                            <input class="register-form__season-input" name="season" type="radio" id="spring" value="1" {{
                old('season')==1 || old('season')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">春</span>
                        </label>
                    </div>
                    <div class="register-form__season-option">
                        <label class="register-form__season-label">
                            <input class="register-form__season-input" name="season" type="radio" id="summer" value="2" {{
                old('season')==1 || old('season')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">夏</span>
                        </label>
                    </div>
                    <div class="register-form__season-option">
                        <label class="register-form__season-label">
                            <input class="register-form__season-input" name="season" type="radio" id="fall" value="3" {{
                old('season')==1 || old('season')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">秋</span>
                        </label>
                    </div>
                    <div class="register-form__season-option">
                        <label class="register-form__season-label">
                            <input class="register-form__season-input" name="season" type="radio" id="winter" value="4" {{
                old('season')==1 || old('season')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">冬</span>
                        </label>
                    </div>
                </div>
                <div class="register-form__error-message">

                </div>
            </div>


            <div class="register-form__group">
                <label class="register-form__label" for="description">
                    お問い合わせ内容<span class="register-form__required">※</span>
                </label>
                <div class="register-form__price-inputs">
                    <textarea class="register-form__textarea" name="description" id="" cols="30" rows="10"
                        placeholder="商品の説明を入力">{{ old('description') }}</textarea>

                    <p class="contact-form__error-message">

                    </p>
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