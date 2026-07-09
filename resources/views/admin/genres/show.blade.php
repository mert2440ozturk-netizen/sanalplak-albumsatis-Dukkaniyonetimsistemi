@extends('layouts.admin')

@section('content')
    <h1>{{ $genre->name }}</h1>
    <div class="admin-detail-card">
        <div class="detail-row"><span class="detail-label">Albüm Sayısı</span><span>{{ $genre->albums->count() }}</span></div>
    </div>
@endsection
