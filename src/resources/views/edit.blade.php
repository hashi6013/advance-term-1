@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection

@section('content')
<div class="edit">
    <div class="edit-container">
        <section class="edit__inner">
            <form action="/mypage/edit" method="post">
                @method('PATCH')
                @csrf
                <div class="reservation-container">
                    <h3 class="reservation__title">予約変更</h3>
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <dl class="reservation__list">
                        <div class="reservation__list-layout">
                            <dt class="reservation__list-term">
                                Shop
                            </dt>
                            <dd class="reservation__list-description">
                                {{$form->shop->shop_name}}
                            </dd>
                        </div>
                        <div class="reservation__list-layout">
                            <dt class="reservation__list-term">
                                Date
                            </dt>
                            <dd class="reservation__list-description">
                                <input class="reservation__list-input" type="date" name="reserve_date" value="{{$form->reserve_date}}">
                                <div class="form__error">
                                @error('reserve_date')
                                {{$message}}
                                @enderror
                                </div>
                            </dd>
                        </div>
                        <div class="reservation__list-layout">
                            <dt class="reservation__list-term">
                                Time
                            </dt>
                            <dd class="reservation__list-description">
                                <select class="reservation__list-select" name="reserve_time">
                                    <option hidden value="null">時間を選択してください</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:30">20:30</option>
                                </select>
                                <div class="form__error">
                                    @error('reserve_time')
                                    {{$message}}
                                    @enderror
                                </div>
                            </dd>
                        </div>
                        <div class="reservation__list-layout">
                            <dt class="reservation__list-term">
                                Number
                            </dt>
                            <dd class="reservation__list-description">
                                <select class="reservation__list-select" name="reserve_number">
                                    <option hidden value="null">人数を選択してください</option>
                                    <option value="1">1人</option>
                                    <option value="2">2人</option>
                                    <option value="3">3人</option>
                                    <option value="4">4人</option>
                                    <option value="5">5人</option>
                                    <option value="6">6人</option>
                                    <option value="7">7人</option>
                                    <option value="8">8人</option>
                                    <option value="9">9人</option>
                                    <option value="10">10人</option>
                                </select>
                                <div class="form__error">
                                    @error('reserve_number')
                                    {{$message}}
                                    @enderror
                                </div>
                            </dd>
                        </div>
                    </dl>
                    <div class="edit-link">
                        <div class="edit-link__layout">
                            <a class="edit-link__item" href="/mypage">マイページへ戻る</a>
                        </div>
                        <div class="edit-link__layout">
                            <button class="edit-link__button" type="submit">
                                予約変更を確定する
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection