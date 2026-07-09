@extends('layouts.admin')

@section('content')

    <h1>Sanatçılar</h1>

    <table class="admin-table">
        <thead>
        <tr>
            <th>Ad</th>
            <th>Ülke</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($artists as $artist)
            <tr>
                <td>{{ $artist->name }}</td>
                <td>{{ $artist->country }}</td>
                <td><a href="/admin/artists/{{ $artist->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
