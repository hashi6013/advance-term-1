@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/review.css') }}">
@endsection

@section('content')
<div class="review">
    <div class="review-container">
        <div class="review__inner">
            <h2 class="review__title">投稿画面</h2>
            <form class="review-form" action="/review/post" method="post">
                @csrf
                <dl class="review-list">
                    <div class="review-list-layout">
                        <dt class="review-list__term">Shop</dt>
                        <dd class="review-list__description">{{$review->shop_name}}</dd>
                    </div>
                    <div class="review-list-layout">
                        <dt class="review-list__term">Rate</dt>
                        <dd class="review-list__description review-list__rate">
                            <p class="review-list__rate-text">Excellent</p>
                            <input type="hidden" name="shop_id" value="{{$review['id'] }}">
                            <input type="hidden" name="user_id">
                            <input class="review-list__rate-input" id="rate5" type="radio" name="rate" value="5" @if(old('rate') == "5") checked @endif>
                            <label class="review-list__rate-label" for="rate5">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="rate4" type="radio" name="rate" value="4" @if(old('rate') == "4") checked @endif>
                            <label class="review-list__rate-label" for="rate4">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="rate3" type="radio" name="rate" value="3" @if(old('rate') == "3") checked @endif>
                            <label class="review-list__rate-label" for="rate3">
                                ★

                            </label>
                            <input class="review-list__rate-input" id="rate2" type="radio" name="rate" value="2" @if(old('rate') == "2") checked @endif>
                            <label class="review-list__rate-label" for="rate2">
                                ★
                            </label>
                            <input class="review-list__rate-input" id="rate1" type="radio" name="rate" value="1" @if(old('rate') == "1") checked @endif>
                            <label class="review-list__rate-label" for="rate1">
                                ★
                            </label>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('rate')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="review-list-layout">
                        <dt class="review-list__term">Comment</dt>
                        <dd class="review-list__description">
                            <textarea class="review-list__description--textarea" name="comment" id="" cols="30" rows="10" placeholder="コメントを入力してください">{{ old('comment')}}</textarea>
                        </dd>
                    </div>
                    <div class="form__error">
                        @error('comment')
                        {{ $message }}
                        @enderror
                    </div>
                </dl>
                <div class="review-link">
                    <a class="review-link__item" href="/detail/{{$review->id}}">
                        戻る
                    </a>
                    <button class="review-link__submit" type="submit">投稿する</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection