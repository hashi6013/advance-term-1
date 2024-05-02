@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="login-form-container">
        <div class="login-form__heading">
            <h2 class="login-form__heading-title">Login</h2>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-icon">
                    <span class="form__label--item"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input-item" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-icon">
                    <span class="form__label--item"><i class="fa-solid fa-lock"></i></span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="form__input-item" type="password" name="password" value="{{ old('password') }}" placeholder="Password">
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
            <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection