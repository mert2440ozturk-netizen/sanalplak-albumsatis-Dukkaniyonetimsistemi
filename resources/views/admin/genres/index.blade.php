@extends('layouts.admin')

@section('content')

    <h1>Admin - Tür</h1>

    @foreach ($genres as $genre)
        <p>{{ $genre->name }}</p>
    @endforeach

@endsection
