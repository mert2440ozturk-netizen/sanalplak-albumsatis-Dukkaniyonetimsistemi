@extends('layouts.admin')

@section('content')

    <h1>Admin - Sipariş Detayı</h1>

    <p>Sipariş: {{ $order->id }}</p>
    <p>Müşteri: {{ $order->user->name }}</p>

    <h2>Sipariş Kalemleri</h2>

    @foreach ($order->orderItems as $item)
        <p>{{ $item->album->name }} — {{ $item->unit_piece }} adet — {{ $item->unit_price }} TL</p>
    @endforeach

@endsection
