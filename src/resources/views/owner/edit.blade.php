@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/edit.css') }}">
@endsection

@section('content')
<div class="owner-edit">
    <div class="owner-edit-container">
        <div class="owner-edit__inner">
            <h2 class="owner-edit__title">
                店舗情報変更画面
            </h2>
            <h3 class="owner-edit__name">
                {{$form->user->name}}さん
            </h3>
            <form class="owner-edit-form" action="/owner/update" enctype="multipart/form-data" method="post">
                @method('PATCH')
                @csrf
                <input type="hidden" name="id" value="{{$form->id}}">
                <input type="hidden" name="user_id" value="{{$form->user_id}}">
                <dl class="owner-edit-form__list">
                    <div class="owner-edit-form__list-layout">
                        <dt class="owner-edit-form__list-term">
                            <label for="shop_name">
                                店舗名
                            </label>
                        </dt>
                        <dd class="owner-edit-form__list-description">
                            <input class="owner-edit-form__list-description-input" type="text" name="shop_name" id="shop_name" value="{{$form->shop_name}}">
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="owner-edit-form__list-layout">
                        <dt class="owner-edit-form__list-term">
                            <label for="shop_overview">
                                店舗概要
                            </label>
                        </dt>
                        <dd class="owner-edit-form__list-description">
                            <textarea class="owner-edit-form__list-description-textarea" name="shop_overview" id="shop_overview">{{$form->shop_overview}}</textarea>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_overview')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="owner-edit-form__list-layout">
                        <dt class="owner-edit-form__list-term">
                            <label for="area">
                                地域
                            </label>
                        </dt>
                        <dd class="owner-edit-form__list-description">
                            <select class="owner-edit-form__list-description-select" name="area_id" id="area">
                                @foreach($areas as $area)
                                <option hidden value="null">選択してください</option>
                                <option value="{{$area->id}}" @if(old('area_id') == $area->id) selected @endif>{{$area->prefecture}}</option>
                                @endforeach
                            </select>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('area_id')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="owner-edit-form__list-layout">
                        <dt class="owner-edit-form__list-term">
                            <label for="genre">
                                ジャンル
                            </label>
                        </dt>
                        <dd class="owner-edit-form__list-description">
                            <select class="owner-edit-form__list-description-select" name="genre_id" id="genre">
                                @foreach($genres as $genre)
                                <option hidden value="null">選択してください</option>
                                <option value="{{$genre->id}}" @if(old('genre_id') == $genre->id) selected @endif>{{$genre->content}}</option>
                                @endforeach
                            </select>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('genre_id')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="owner-edit-form__list-layout">
                        <dt class="owner-edit-form__list-term">
                            <label for="shop_image">
                                店舗画像
                            </label>
                        </dt>
                        <dd class="owner-edit-form__list-description">
                            <input class="owner-edit-form__list-description-input" type="file" name="shop_image" id="shop_image" value="{{$form->shop_image}}">
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_image')
                        {{$message}}
                        @enderror
                    </div>
                </dl>
                <div class="owner-edit-form__button">
                    <a class="owner-edit-form__button-back" href="/owner/home">戻る</a>
                    <button class="owner-edit-form__button-submit" type="submit">
                        変更する
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection