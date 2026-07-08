@extends('layouts.app')

@section('content')

    <h1>Müzik Türleri</h1>

    <div class="genre-grid">
        @foreach ($genres as $genre)
            <a href="/genres/{{ $genre->id }}/albums" class="genre-card">
                <p class="genre-card-name">{{ $genre->name }}</p>
                <p class="genre-card-count">{{ $genre->albums->count() }} albüm</p>
            </a>
        @endforeach
    </div>

@endsection
