@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage">
    <div class="mypage-container">
        <h2 class="mypage__name">
            {{$users->name}}さん
        </h2>
        <div class="reservation__alert">
            @if(session('message'))
            <div class="reservation__alert--success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="mypage-layout">
            <section class="status">
                <h3 class="status__title">予約状況</h3>
                @foreach($profiles as $key=>$profile)
                <div class="status-container">
                    <div class="status__flex">
                        <i class="fa-regular fa-clock"></i>
                        <h4 class="status__number">予約{{$key+1}}</h4>
                        <form class="status-form" action="/mypage/delete" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{$profile['id']}}">
                            <button class="status__delete" type="submit">
                                <i class="fa-regular fa-circle-xmark"></i>
                            </button>
                        </form>
                    </div>
                    <dl>
                        <div class="status__list-layout">
                            <dt class="status__list-term">Shop</dt>
                            <dd class="status__list-description">
                                {{$profile->shop->shop_name}}
                            </dd>
                        </div>
                        <div class="status__list-layout">
                            <dt class="status__list-term">Date</dt>
                            <dd class="status__list-description">
                                {{$profile->reserve_date}}
                            </dd>
                        </div>
                        <div class="status__list-layout">
                            <dt class="status__list-term">Time</dt>
                            <dd class="status__list-description">
                                {{ substr($profile->reserve_time, 0, 5) }}
                            </dd>
                        </div>
                        <div class="status__list-layout">
                            <dt class="status__list-term">Number</dt>
                            <dd class="status__list-description">
                                {{$profile->reserve_number}}人
                            </dd>
                        </div>
                        <div class="edit-link">
                            <a class="edit-link__item" href="/mypage/edit?id={{$profile->id}}">予約の変更</a>
                        </div>
                    </dl>
                </div>
                @endforeach
            </section>
            <section class="favorite">
                <h3>お気に入り店舗</h3>
                <div class="favorite-container">
                @foreach ($favorites as $favorite)
                    <article class="card">
                        <div class="card__img">
                            <img src="{{asset('storage/'.$favorite->shop->shop_image)}}" width="240" height="120" alt="お店の画像" decoding="async">
                        </div>
                        <div class="card__content">
                            <h4 class="card__content-name">
                                {{$favorite->shop->shop_name}}
                            </h4>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item">
                                    #{{$favorite->shop->area->prefecture}}
                                </p>
                                <p class="card__content-tag-item">
                                    #{{$favorite->shop->genre->content}}
                                </p>
                            </div>
                            <div class="card__content-link-layout">
                                <a class="card__content-link-item" href="/detail/{{$favorite->shop->id}}">詳しくみる</a>
                                @if($favorite->shop->favorite_by_auth_user())
                                <a href="{{ route('shop.unlike', ['id' => $favorite->shop->id]) }}">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                @else
                                <a href="{{ route('shop.favorite', ['id' => $favorite->shop->id]) }}" class="favorite">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                @endif
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</div>

@endsection
