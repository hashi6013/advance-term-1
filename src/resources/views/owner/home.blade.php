@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/home.css') }}">
@endsection

@section('content')
<div class="owner">
    <div class="owner-container">
        <div class="owner__inner">
            <h2 class="owner__title">
                店舗代表者用ページ
            </h2>
            <div class="owner__link-layout">
                <p class="owner__link">
                    <a href="/owner/add" class="owner__link-item">店舗情報作成ページへ</a>
                </p>
                <p class="owner__link">
                    <a href="/owner/list?id={{$owner->id}}" class="owner__link-item">予約情報確認ページへ</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection