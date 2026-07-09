@extends('layouts.admin')

@section('content')
    <h1>Kullanıcılar</h1>
    <table class="admin-table">
        <thead>
        <tr><th>Ad</th><th>Email</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="/admin/users/{{ $user->id }}" class="table-link">Detay</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

