@extends('layouts.admin')

@section('content')
    <h1>{{ $artist->name }}</h1>
    <div class="admin-detail-card">
        <div class="detail-row"><span class="detail-label">Ülke</span><span>{{ $artist->country }}</span></div>
        <div class="detail-row"><span class="detail-label">Hakkında</span><span>{{ $artist->description }}</span></div>
    </div>
@endsection
