@extends('layouts.admin')

@section('content')
    <h1>{{ $album->name }}</h1>
    <div class="admin-detail-card">
        <div class="detail-row"><span class="detail-label">Sanatçı</span><span>{{ $album->artist->name }}</span></div>
        <div class="detail-row"><span class="detail-label">Tür</span><span>{{ $album->genre->name }}</span></div>
        <div class="detail-row"><span class="detail-label">Çıkış Yılı</span><span>{{ $album->release_year }}</span></div>
        <div class="detail-row"><span class="detail-label">Fiyat</span><span>{{ $album->price }} TL</span></div>
        <div class="detail-row"><span class="detail-label">Stok</span><span>{{ $album->stock }}</span></div>
    </div>
@endsection
