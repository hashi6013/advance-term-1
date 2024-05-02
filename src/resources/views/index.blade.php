@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('search')
<form class="search-form" action="{{route('search')}}" method="get">
    @csrf
    <div class="search-form__group">
        <div class="search-form__select-container">
            <select class="search-form__select" name="area_id" id="" value="{{request('area')}}">
                <option hidden value="">All areas</option>
                @foreach ($areas as $area)
                <option value="{{$area['id']}}" @if(request('area_id')==$area->id) selected @endif>
                    {{$area['prefecture']}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="search-form__select-container">
            <select class="search-form__select" name="genre_id" value="{{request('genre')}}">
                <option hidden value="">All genres</option>
                @foreach ($genres as $genre)
                <option value="{{$genre['id']}}" @if(request('genre_id')==$genre->id) selected @endif>
                    {{$genre['content']}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="search-form__input-container">
            <input class="search-form__input" type="text" name="keyword" value="{{request('keyword')}}" placeholder="Search ...">
        </div>
    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit" area-label="検索する">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
</form>
@endsection

@section('content')
<div class="cards">
    <div class="cards-container">
        @foreach($shops as $shop)
        <article class="card">
            <div class="card__img">
                <img src="{{ asset('storage/'.$shop->shop_image)}}" width="240" height="160" alt="お店の画像" decoding="async">
            </div>
            <div class="card__content">
                <h2 class="card__content-title">
                    {{$shop->shop_name }}
                </h2>
                <div class="card__content-tag">
                    <p class="card__content-tag-item">
                        #{{ $shop->area->prefecture }}
                    </p>
                    <p class="card__content-tag-item card__content-tag-item--genre">
                        #{{$shop->genre->content }}
                    </p>
                </div>
                <div class="card__content-link">
                    <a class="card__content-link-item" href="/detail/{{$shop->id}}">
                        詳しくみる
                    </a>
                    <!-- ハートマーク -->
                </div>
            </div>
        </article>
        @endforeach
    </div>
</div>

@endsection