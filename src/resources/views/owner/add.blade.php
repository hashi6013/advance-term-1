@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/add.css') }}">
@endsection

@section('content')
<div class="shop-create">
    <div class="shop-create-container">
        <div class="shop-create__inner">
            <h2 class="shop-create__title">
                店舗情報作成ページ
            </h2>
            @foreach($owners as $owner)
            <h3 class="shop-create__owner">{{$owner->name}}さん</h3>
            <form class="shop-create-form" action="/owner/done" enctype="multipart/form-data" method="post">
                @csrf
                <dl class="shop-create-form-list">
                    <div class="shop-create-form-list__layout">
                        <dt class="shop-create-form-list__term">
                            <label for="shop_name">店舗名</label>
                        </dt>
                        <dd class="shop-create-form-list__description">
                            <input class="shop-create-form-list__description-input" type="text" name="shop_name" id="shop_name" placeholder="店舗名" value="{{ old('shop_name') }}">
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="shop-create-form-list__layout">
                        <dt class="shop-create-form-list__term">
                            <label for="shop_overview">店舗概要</label>
                        </dt>
                        <dd class="shop-create-form-list__description">
                            <textarea class="shop-create-form-list__description-textarea" name="shop_overview" id="shop_overview" placeholder="雰囲気の良いお店です。">{{ old('shop_overview') }}</textarea>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_overview')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="shop-create-form-list__layout">
                        <dt class="shop-create-form-list__term">
                            <label for="area">地域</label>
                        </dt>
                        <dd class="shop-create-form-list__description">
                            <select class="shop-create-form-list__description-select" name="area_id" id="area">
                            @foreach($areas as $area)
                                <option hidden value="null">選択して下さい</option>
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
                    <div class="shop-create-form-list__layout">
                        <dt class="shop-create-form-list__term">
                            <label for="genre">ジャンル</label>
                        </dt>
                        <dd class="shop-create-form-list__description">
                            <select class="shop-create-form-list__description-select" name="genre_id" id="genre">
                            @foreach($genres as $genre)
                                <option hidden value="null">選択して下さい</option>
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
                    <div class="shop-create-form-list__layout">
                        <dt class="shop-create-form-list__term">
                            <label for="shop_image">店舗画像</label>
                        </dt>
                        <dd class="shop-create-form-list__description">
                            <input class="shop-create-form-list__description-input" type="file" name="shop_image" id="shop_image">
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('shop_image')
                        {{$message}}
                        @enderror
                    </div>
                </dl>
                <input type="hidden" name="user_id">
                <div class="shop-create-form__button">
                    <button class="shop-create-form__button-submit" type="submit">
                        登録
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection