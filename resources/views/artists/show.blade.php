@extends('layouts.app')

@section('content')

    <div class="artist-hero">
        <div class="artist-avatar-large">
            <i class="ti ti-microphone-2"></i>
        </div>
        <div class="artist-info">
            <h1>{{ $artist->name }}</h1>
            <p class="meta">{{ $artist->country }}</p>
            <p class="bio">{{ $artist->description }}</p>
        </div>
    </div>

    <h2>Albümleri</h2>

    <div class="simple-album-grid">
        @foreach ($artist->albums as $album)
            <a href="/albums/{{ $album->id }}" class="simple-album-card">
                <p class="title">{{ $album->name }}</p>
                <span class="badge">{{ $album->genre->name }}</span>
                <p class="price">{{ $album->price }} TL</p>
            </a>
        @endforeach
    </div>

@endsection
