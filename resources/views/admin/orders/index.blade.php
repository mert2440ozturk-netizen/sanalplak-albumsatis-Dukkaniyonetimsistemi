@extends('layouts.admin')

@section('content')
    <h1>Siparişler</h1>
    <table class="admin-table">
        <thead>
        <tr><th>Sipariş No</th><th>Müşteri</th><th>Kalem Sayısı</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>#{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->orderItems->count() }}</td>
                <td><a href="/admin/orders/{{ $order->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
