@extends('layouts.admin')

@section('content')

    <h1>Admin - Şarkı listesi</h1>

    @foreach ($songs as $song)
        <p>{{ $song->album_id }} - {{ $song->name }} — {{ $song->price }} TL</p>
    @endforeach

@endsection
