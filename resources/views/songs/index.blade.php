@extends('layouts.app')

@section('content')

    <h1>Şarkı Ara</h1>

    <form method="GET" action="/songs" class="search-form">
        <input type="text" name="q" placeholder="Şarkı adı ara..." value="{{ $query }}">
        <button type="submit">Ara</button>
    </form>

    @if ($query && $songs->isEmpty())
        <p class="no-results">"{{ $query }}" için sonuç bulunamadı.</p>
    @endif

    <div class="song-list">
        @foreach ($songs as $song)
            <div class="song-row">
                <a href="https://www.youtube.com/results?search_query={{ urlencode($song->name . ' ' . $song->album->artist->name) }}" target="_blank" rel="noopener" class="song-name">
                    {{ $song->name }}
                </a>
                <span class="duration">{{ $song->album->name }}</span>
            </div>
        @endforeach
    </div>

@endsection
