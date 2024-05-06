@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<div class="admin">
    <div class="admin-container">
        <div class="admin__inner">
            <h2 class="admin__title">
                管理者用ページ
            </h2>
            <div class="admin__link-layout">
                <p class="admin__link">
                    <a href="/admin/add" class="admin__link-item">店舗代表者登録ページへ</a>
                </p>
                <p class="admin__link">
                    <a href="" class="admin__link-item">店舗代表者一覧ページへ</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection