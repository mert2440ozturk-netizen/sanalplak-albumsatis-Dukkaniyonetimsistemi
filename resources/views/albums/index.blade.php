@extends('layouts.app')

@section('content')

    <h1>Albümler</h1>

    <div class="simple-album-grid">
        @foreach ($albums as $album)
            <a href="/albums/{{ $album->id }}" class="simple-album-card">
                <p class="title">{{ $album->name }}</p>
                <p class="artist-sub">{{ $album->artist->name }}</p>
                <span class="badge">{{ $album->genre->name }}</span>
                <p class="price">{{ $album->price }} TL</p>
            </a>
        @endforeach
    </div>

@endsection
