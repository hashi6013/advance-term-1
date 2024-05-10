@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/owner/list.css') }}">
@endsection

@section('content')
<div class="reserve-list">
    <div class="reserve-list-container">
        <div class="reserve-list__inner">
            <h2 class="reserve-list__title">予約情報確認ページ</h2>
            <table class="reserve-list__table">
                <tr class="reserve-list__table-row">
                    <th class="reserve-list__table-heading">名前</th>
                    <th class="reserve-list__table-heading">メールアドレス</th>
                    <th class="reserve-list__table-heading">予約日</th>
                    <th class="reserve-list__table-heading">予約時間</th>
                    <th class="reserve-list__table-heading">予約人数</th>
                </tr>
                @foreach($reserve_lists as $reserve_list)
                <tr class="reserve-list__table-row">
                    <td class="reserve-list__table-detail">{{$reserve_list->user->name}}</td>
                    <td class="reserve-list__table-detail">{{$reserve_list->user->email}}</td>
                    <td class="reserve-list__table-detail">{{$reserve_list->reserve_date}}</td>
                    <td class="reserve-list__table-detail">{{ substr($reserve_list->reserve_time, 0, 5) }}</td>
                    <td class="reserve-list__table-detail">{{$reserve_list->reserve_number}}名</td>
                </tr>
                @endforeach
            </table>
            <p class="reserve-list__link">
                <a class="reserve-list__link-item" href="/owner/home">ホーム画面へ</a>
            </p>
        </div>
    </div>
</div>
@endsection