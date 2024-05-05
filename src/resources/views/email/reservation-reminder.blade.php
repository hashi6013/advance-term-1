<!DOCTYPE html>
<html>
<head>
    <title>予約のリマインダー</title>
</head>
<body>
    <p>{{$user->name}}さん</p>
    <p>いつもご利用ありがとうございます。</p>
    <p>このメールは、Reseより、予約のリマインドをお知らせするものです。</p>
    <p>予約の詳細は以下の通りです。</p>

    <ul>
        <li>店舗:{{$reservation->shop->shop_name}}</li>
        <li>予約日:{{$reservation->reserve_date}}</li>
        <li>時間:{{ substr($reservation->reserve_time, 0, 5) }}</li>
        <li>人数:{{$reservation->reserve_number}}名</li>
        <li>予約者:{{$user->name}}</li>
    </ul>
</body>
</html>