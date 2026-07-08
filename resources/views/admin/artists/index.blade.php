@extends('layouts.admin')

@section('content')

    <h1>Admin - Sanatçı Listesi</h1>

    @foreach ($artists as $artist)
        <p>{{ $artist->name }} — {{ $artist->country }}</p>
    @endforeach

@endsection
