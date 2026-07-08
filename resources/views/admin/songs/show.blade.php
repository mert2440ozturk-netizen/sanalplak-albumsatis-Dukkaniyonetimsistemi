@extends('layouts.admin')

@section('content')

    <h1>Admin - Müzik Detayı</h1>

    <p>müzik ismi: {{ $song->album->name }}</p>
    <p>müzik süresi: {{ $song->duration }}</p>

@endsection
