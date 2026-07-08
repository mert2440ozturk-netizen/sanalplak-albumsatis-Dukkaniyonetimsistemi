@extends('layouts.admin')

@section('content')

    <h1>Admin Paneli</h1>
    <p>Hoş geldin.</p>

    <p>Sanatçı Sayısı: {{ $stats['artists'] }}</p>
    <p>Albüm Sayısı: {{ $stats['albums'] }}</p>
    <p>Şarkı Sayısı: {{ $stats['songs'] }}</p>
    <p>Tür Sayısı: {{ $stats['genres'] }}</p>
    <p>Kullanıcı Sayısı: {{ $stats['users'] }}</p>
    <p>Sipariş Sayısı: {{ $stats['orders'] }}</p>

@endsection
