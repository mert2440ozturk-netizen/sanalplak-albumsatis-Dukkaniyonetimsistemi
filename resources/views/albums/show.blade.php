@extends('layouts.app')

@section('content')

    <div class="album-hero">
        <div class="cover-large">
            <img src="https://picsum.photos/seed/album{{ $album->id }}/220/220" alt="{{ $album->name }}" class="cover-img">
        </div>
        <div class="album-info">
            <h1>{{ $album->name }}</h1>
            <p class="artist-link">
                <a href="/artists/{{ $album->artist->id }}">{{ $album->artist->name }}</a>
            </p>
            <span class="badge">{{ $album->genre->name }}</span>
            <p class="meta">{{ $album->release_year }} — {{ $album->price }} TL — Stok: {{ $album->stock }}</p>
        </div>
    </div>

    <h2>Şarkılar</h2>

    <div class="song-list">
        @foreach ($album->songs as $index => $song)
            <div class="song-row">
                <span class="track-number">{{ $index + 1 }}</span>
                <a href="https://www.youtube.com/results?search_query={{ urlencode($song->name . ' ' . $album->artist->name) }}" target="_blank" rel="noopener" class="song-name">
                    {{ $song->name }}
                </a>
                <span class="duration">{{ sprintf('%d:%02d', floor($song->duration / 60), $song->duration % 60) }}</span>
            </div>
        @endforeach
    </div>

@endsection
