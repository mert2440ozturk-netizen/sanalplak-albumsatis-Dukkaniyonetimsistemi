@extends('layouts.admin')

@section('content')
    <h1>Şarkılar</h1>
    <table class="admin-table">
        <thead>
        <tr><th>Ad</th><th>Albüm</th><th>Süre</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($songs as $song)
            <tr>
                <td>{{ $song->name }}</td>
                <td>{{ $song->album->name }}</td>
                <td>{{ sprintf('%d:%02d', floor($song->duration / 60), $song->duration % 60) }}</td>
                <td><a href="/admin/songs/{{ $song->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
