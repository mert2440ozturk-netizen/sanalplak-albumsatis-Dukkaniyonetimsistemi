@extends('layouts.admin')

@section('content')

    <h1>Admin - Kullanıcı Detayı</h1>

    <p>İsim: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

@endsection
