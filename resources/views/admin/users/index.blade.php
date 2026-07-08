@extends('layouts.admin')

@section('content')

    <h1>Admin - Kullanıcı listesi</h1>

    @foreach($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>
    @endforeach

@endsection

