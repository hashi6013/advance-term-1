@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="detail-container">
        <div class="restaurant-detail">
            <div class="restaurant-detail__layout">
                <a href="{{route('index')}}" class="restaurant-detail__back">
                    <i class="fa-solid fa-chevron-left"></i>
                </a>
                <h2 class="restaurant-detail__title">
                    {{$detail->shop_name}}
                </h2>
            </div>
            <div class="restaurant-detail__img">
                <img src="{{ asset('storage/'.$detail->shop_image)}}" alt="お店の画像" decoding="async">
            </div>
            <div class="restaurant-detail__tag">
                <p class="restaurant-detail__tag-item">
                    #{{$detail->area->prefecture}}
                </p>
                <p class="restaurant-detail__tag-item restaurant-detail__tag-item--genre">
                    #{{$detail->genre->content}}
                </p>
            </div>
            <div class="restaurant-detail__overview">
                <p class="restaurant-detail__overview-text">
                    {{$detail->shop_overview}}
                </p>
            </div>
        </div>
        <form class="reservation" action="" method="post">
            @csrf
            <div class="reservation-container">
                <h3 class="reservation-title">予約</h3>
                <input type="hidden" name="shop_id" value="{{$detail['id']}}">
                <input class="reservation__select-date" type="date" name="reserve_date" id="date_input" oninput="updateDate()">
                <div class="form__error">
                    @error('reserve_date')
                    {{$message}}
                    @enderror
                </div>
                <select class="reservation__select-time" id="timeSelect" name="reserve_time">
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
                <select class="reservation__select-number" id="numberSelect" name="reserve_number">
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
                <div class="reservation-input__content">
                    <dl class="reservation-input__content-list">
                        <div class="reservation-input__content-list-layout">
                            <dt class="reservation-input__content-term">Shop</dt>
                            <dd class="reservation-input__content-description">
                                {{$detail->shop_name}}
                            </dd>
                        </div>
                        <div class="reservation-input__content-list-layout">
                            <dt class="reservation-input__content-term">Date</dt>
                            <dd class="reservation-input__content-description" id="display_date">
                            </dd>
                        </div>
                        <div class="reservation-input__content-list-layout">
                            <dt class="reservation-input__content-term">Time</dt>
                            <dd class="reservation-input__content-description reservation-input__content-description-time">
                            </dd>
                        </div>
                        <div class="reservation-input__content-list-layout">
                            <dt class="reservation-input__content-term">Number</dt>
                            <dd class="reservation-input__content-description reservation-input__content-description-time" id="selectValue">
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="reservation-button">
                    <button class="reservation-button__submit" type="submit">予約する</button>
            </div>
        </form>
    </div>
</div>
<script>
    function updateDate() {
        var input = document.getElementById('date_input');
        var display = document.getElementById('display_date');
        display.textContent = input.value;
    }
    const element = document.querySelector('#timeSelect');
        element.addEventListener('change', handleChange);
        function handleChange(event) {
            const value = element.value;
            const log = value;
            document.querySelector('.reservation-input__content-description-time').innerHTML = log;
        }
    const select = document.getElementById('numberSelect');
        select.addEventListener('change', () => {
    const selectValue = document.getElementById('selectValue');
    selectValue.textContent = select.options[select.selectedIndex].textContent
    });
</script>
@endsection