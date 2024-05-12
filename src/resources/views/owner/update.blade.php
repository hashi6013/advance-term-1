@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/update.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__content-container">
        <div class="thanks__heading">
            <h2 class="thanks__heading-title">登録しました</h2>
            <div class="thanks__link">
                <a class="thanks__link-item" href="/owner/home">店舗代表者用ホーム画面へ</a>
            </div>
        </div>
    </div>
</div>
@endsection