@extends('layouts.app')

@section('content')

    <div class="hero">
        <h1>Sanal Plak Dükkanı</h1>
        <p>Yüzlerce albümü keşfet, sanatçılara göz at, türlere göre gezin.</p>

        <form method="GET" action="/albums" class="hero-search">
            <input type="text" name="q" placeholder="Albüm ara...">
            <button type="submit">Ara</button>
        </form>
    </div>

    <h2>Öne Çıkan Albümler</h2>

    <div class="simple-album-grid">
        @foreach ($featuredAlbums as $album)
            <a href="/albums/{{ $album->id }}" class="simple-album-card">
                <p class="title">{{ $album->name }}</p>
                <p class="artist-sub">{{ $album->artist->name }}</p>
                <p class="price">{{ $album->price }} TL</p>
            </a>
        @endforeach
    </div>

    <h2>Türlere Göz At</h2>

    <div class="genre-pills">
        @foreach ($genres as $genre)
            <a href="/genres/{{ $genre->id }}/albums" class="genre-pill">{{ $genre->name }}</a>
        @endforeach
    </div>

@endsection
