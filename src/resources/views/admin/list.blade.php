@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css') }}">
@endsection

@section('content')
<div class="owner-list">
    <div class="owner-list-container">
        <div class="owner-list__inner">
            <h2 class="owner-list__title">店舗代表者一覧画面</h2>
            <table class="owner-list__table">
                <tr class="owner-list__table-row">
                    <th class="owner-list__table-heading">名前</th>
                    <th class="owner-list__table-heading owner-list__table-heading--email">メールアドレス</th>
                </tr>
                @foreach($owner_lists as $owner_list)
                <tr class="owner-list__table-row">
                    <td class="owner-list__table-detail">{{ $owner_list->name }}</td>
                    <td class="owner-list__table-detail owner-list__table-detail--email">{{ $owner_list->email }}</td>
                </tr>
                @endforeach
            </table>
            {{$owner_lists->links()}}
        </div>
    </div>
</div>
@endsection