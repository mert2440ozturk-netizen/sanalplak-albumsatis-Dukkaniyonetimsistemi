@extends('layouts.admin')

@section('content')

    <h1>Admin - Albüm Listesi</h1>

    @foreach ($albums as $album)
        <p>{{ $album->name }} — {{ $album->price }} TL</p>
    @endforeach

@endsection
