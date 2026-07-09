@extends('layouts.admin')

@section('content')
    <h1>{{ $song->name }}</h1>
    <div class="admin-detail-card">
        <div class="detail-row"><span class="detail-label">Albüm</span><span>{{ $song->album->name }}</span></div>
        <div class="detail-row"><span class="detail-label">Süre</span><span>{{ sprintf('%d:%02d', floor($song->duration / 60), $song->duration % 60) }}</span></div>
    </div>
@endsection
