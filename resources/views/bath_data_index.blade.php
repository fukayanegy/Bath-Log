@extends('header')

@section('content')
<h1>title</h1>
<a href="#">新規登録</a>
<table>
    <tr>
        <th>名前</th>
        <th>最寄り駅</th>
        <th>お店の種別</th>
    </tr>
    @foreach ($bath_datas as $bath_data)
    <tr>
        <td>{{ $bath_data->store_name }}</td>
        <td>{{ $bath_data->nearest_station }}</td>
        <td>{{ $bath_data->store_type }}</td>
    </tr>
    @endforeach
</table>
@endsection
