@extends('layouts.app')

@section('content')

    <h1>Siparişlerim</h1>

    <div class="stats-row">
        <div class="stat-card">
            <p class="stat-label">Toplam Sipariş</p>
            <p class="stat-value">{{ $totalOrders }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Toplam Albüm</p>
            <p class="stat-value">{{ $totalAlbums }}</p>
        </div>
        <div class="stat-card">
            <p class="stat-label">Toplam Harcama</p>
            <p class="stat-value">{{ $totalSpent }} TL</p>
        </div>
    </div>

    <div class="order-list">
        @foreach ($orders as $order)
            <div class="order-card">
                <p class="order-title">Sipariş #{{ $order->id }}</p>

                @foreach ($order->orderItems as $item)
                    <div class="order-item-row">
                        <span>{{ $item->album->name }}</span>
                        <span class="order-item-meta">{{ $item->unit_piece }} adet — {{ $item->unit_price }} TL</span>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection
