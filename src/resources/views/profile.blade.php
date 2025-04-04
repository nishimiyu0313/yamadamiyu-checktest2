@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="profile-form__content">
    <div class="profile-form__heading">
        <h2>プロフィール登録</h2>
    </div>
    <form class="form" action="/profile" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="gender" name="gender" value="{{ old('gender') }}" />
                </div>
                <div class="form__error">
                    @error('')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">誕生日</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="birthday" name="birthday" value="{{ old('birthday') }}" />
                </div>
                <div class="form__error">
                    @error('')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <input class="contact-form__btn btn" type="submit" value="送信">
    </form>   
        @endsection