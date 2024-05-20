@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection

@section('content')
<div class="payment">
    <div class="payment-container">
        <div class="payment__inner">
            <h2 class="payment__title">決済画面</h2>
            <form class="payment-form" action="/mypage/payment/create/charge" method="post">
                @csrf
                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                    data-amount="1000"
                    data-name="お支払い画面"
                    data-label="お支払い"
                    data-description="現在はデモ画面です"
                    data-locale="auto"
                    data-currency="JPY">
                </script>
            </form>
            <p class="payment__link">
                <a class="payment__link-item" href="/mypage">マイページへ</a>
            </p>
        </div>
    </div>
</div>
@endsection