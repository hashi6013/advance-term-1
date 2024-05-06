@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection

@section('content')
<div class="add">
    <div class="add-container">
        <div class="add__inner">
            <h2 class="add__title">店舗代表者の登録</h2>
            <form class="add-form" action="/admin/done" method="post">
                @csrf
                <dl class="add-form-list">
                    <div class="add-form-list__layout">
                        <dt class="add-form-list__term">
                            <label for="name">名前</label>
                        </dt>
                        <dd class="add-form-list__description">
                            <input class="add-form-list__description-input" type="text" name="name" id="name" placeholder="例:店舗太郎">
                        </dd>
                    </div>
                    <div class="add-form-list__layout">
                        <dt class="add-form-list__term">
                            <label for="email">メールアドレス</label>
                        </dt>
                        <dd class="add-form-list__description">
                            <input class="add-form-list__description-input" type="text" name="email" id="email" placeholder="例:owner@example.com">
                        </dd>
                    </div>
                    <div class="add-form-list__layout">
                        <dt class="add-form-list__term">
                            <label for="password">パスワード</label>
                        </dt>
                        <dd class="add-form-list__description">
                            <input class="add-form-list__description-input" type="text" name="password" id="password" placeholder="例:owner12345">
                        </dd>
                    </div>
                </dl>
                <input type="hidden" name="role">
                <input type="hidden" name="email_verified_at">
                <div class="add-form__button">
                    <button class="add-form__button-submit" type="submit">
                        登録
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection