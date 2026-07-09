@extends('layouts.admin')

@section('content')
    <h1>Türler</h1>
    <table class="admin-table">
        <thead>
        <tr><th>Ad</th><th>Albüm Sayısı</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre->name }}</td>
                <td>{{ $genre->albums->count() }}</td>
                <td><a href="/admin/genres/{{ $genre->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
