@extends('layouts.app')

@section('content')

    <h1>Müzikler</h1>

    @foreach($songs as $song)
        <p>{{$song->album_id}}</p>
        <p>{{$song->name}}</p>
        <p>{{$song->duration}}</p>
    @endforeach

@endsection
