@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/feedback.css') }}">
@endsection

@section('content')
<div class="feedback">
    <div class="feedback-container">
        <div class="feedback__inner">
            <h2 class="feedback__title">予約情報確認ページ</h2>
            <table class="feedback__table">
                <tr class="feedback__table-row">
                    <th class="feedback__table-heading">名前</th>
                    <th class="feedback__table-heading">メールアドレス</th>
                    <th class="feedback__table-heading">評価(1~5)</th>
                    <th class="feedback__table-heading">コメント</th>
                </tr>
                @foreach($feedback_lists as $feedback_list)
                <tr class="feedback__table-row">
                    <td class="feedback__table-detail">{{$feedback_list->user->name}}</td>
                    <td class="feedback__table-detail">{{$feedback_list->user->email}}</td>
                    <td class="feedback__table-detail">{{$feedback_list->rate}}</td>
                    <td class="feedback__table-detail">{{$feedback_list->comment}}</td>
                </tr>
                @endforeach
            </table>
            <p class="feedback__link">
                <a class="feedback__link-item" href="/owner/home">ホーム画面へ</a>
            </p>
        </div>
    </div>
</div>
@endsection