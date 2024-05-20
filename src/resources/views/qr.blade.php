@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/qr.css') }}">
@endsection

@section('content')
<div class="qr">
    <div class="qr-container">
        <div class="qr__inner">
            <h2 class="qr__title">QRコード</h2>
            <p>{{QrCode::size(100)->generate('localhost')}}</p>
            <p class="qr__link">
                <a class="qr__link-item" href="/mypage">マイページへ</a>
            </p>
        </div>
    </div>
</div>
@endsection