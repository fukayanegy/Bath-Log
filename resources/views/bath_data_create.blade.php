@extends('header')

@section('content')

<h1>新規バスデータ登録画面</h1>

<a href="#">戻る</a>

<form action="{{ route('bath_data.store') }}" method="POST">
    @csrf

    <input type="text" name="store_name" placeholder="店舗名">
    <input type="text" name="nearest_station" placeholder="最寄り駅">
    <input type="text" name="store_type" placeholder="お店の種別">
    <button type="submit">登録</button>
</form>
@endsection
