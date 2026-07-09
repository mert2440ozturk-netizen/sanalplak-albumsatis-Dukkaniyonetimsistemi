@extends('layouts.admin')

@section('content')
    <h1>Albümler</h1>
    <table class="admin-table">
        <thead>
        <tr><th>Ad</th><th>Sanatçı</th><th>Tür</th><th>Fiyat</th><th>Stok</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($albums as $album)
            <tr>
                <td>{{ $album->name }}</td>
                <td>{{ $album->artist->name }}</td>
                <td>{{ $album->genre->name }}</td>
                <td>{{ $album->price }} TL</td>
                <td>{{ $album->stock }}</td>
                <td><a href="/admin/albums/{{ $album->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
