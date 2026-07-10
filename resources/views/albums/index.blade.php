@extends('layouts.app')

@section('content')

    <h1>Albümler</h1>

    <form method="GET" action="/albums" class="search-form">
        <input type="text" name="q" placeholder="Albüm adı ara..." value="{{ $query }}">
        <button type="submit">Ara</button>
    </form>

    @if ($query && $albums->isEmpty())
        <p class="no-results">"{{ $query }}" için sonuç bulunamadı.</p>
    @endif

    <div class="simple-album-grid">
        @foreach ($albums as $album)
            <a href="/albums/{{ $album->id }}" class="simple-album-card">
                <img src="https://picsum.photos/seed/album{{ $album->id }}/300/300" alt="" class="card-cover">
                <p class="title">{{ $album->name }}</p>
                <p class="artist-sub">{{ $album->artist->name }}</p>
                <span class="badge">{{ $album->genre->name }}</span>
                <p class="price">{{ $album->price }} TL</p>
            </a>
        @endforeach
    </div>

@endsection
