@extends('layouts.app')

@section('content')

    <h1>Sanatçılar</h1>

    <div class="artist-grid">
        @foreach ($artists as $artist)
            <a href="/artists/{{ $artist->id }}" class="artist-card">
                <div class="artist-avatar">
                    <i class="ti ti-microphone-2"></i>
                </div>
                <p class="artist-name-card">{{ $artist->name }}</p>
                <p class="artist-country-card">{{ $artist->country }}</p>
            </a>
        @endforeach
    </div>

@endsection
