@extends('layouts.admin')

@section('content')

    <h1>Dashboard</h1>

    <div class="admin-stats-grid">
        <div class="admin-stat-card accent-crimson">
            <p class="stat-label">Sanatçılar</p>
            <p class="stat-value">{{ $stats['artists'] }}</p>
        </div>
        <div class="admin-stat-card accent-gold">
            <p class="stat-label">Albümler</p>
            <p class="stat-value">{{ $stats['albums'] }}</p>
        </div>
        <div class="admin-stat-card accent-crimson">
            <p class="stat-label">Şarkılar</p>
            <p class="stat-value">{{ $stats['songs'] }}</p>
        </div>
        <div class="admin-stat-card accent-gold">
            <p class="stat-label">Türler</p>
            <p class="stat-value">{{ $stats['genres'] }}</p>
        </div>
        <div class="admin-stat-card accent-crimson">
            <p class="stat-label">Kullanıcılar</p>
            <p class="stat-value">{{ $stats['users'] }}</p>
        </div>
        <div class="admin-stat-card accent-gold">
            <p class="stat-label">Siparişler</p>
            <p class="stat-value">{{ $stats['orders'] }}</p>
        </div>
    </div>

@endsection
