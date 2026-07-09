@extends('layouts.admin')

@section('content')
    <h1>Sipariş #{{ $order->id }}</h1>
    <p class="meta">Müşteri: {{ $order->user->name }} ({{ $order->user->email }})</p>

    <table class="admin-table">
        <thead>
        <tr><th>Albüm</th><th>Adet</th><th>Birim Fiyat</th></tr>
        </thead>
        <tbody>
        @foreach ($order->orderItems as $item)
            <tr>
                <td>{{ $item->album->name }}</td>
                <td>{{ $item->unit_piece }}</td>
                <td>{{ $item->unit_price }} TL</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
