@extends('layouts.admin')

@section('content')

    <h1>Admin - Sanatçı Detayı</h1>

    <p>İsim: {{ $artist->name }}</p>
    <p>Ülke: {{ $artist->country }}</p>
    <p>Hakkında: {{ $artist->description }}</p>

@endsection
