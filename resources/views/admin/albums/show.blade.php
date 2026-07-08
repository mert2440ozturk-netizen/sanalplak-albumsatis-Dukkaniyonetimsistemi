@extends('layouts.admin')

@section('content')

    <h1>Admin - Albüm Detayı</h1>

    <p>İsim: {{ $album->name }}</p>
    <p>stock: {{ $album->stock }}</p>
    <p>Hakkında: {{ $album->release_year }}</p>
    <p>ücret: {{ $album->price }}</p>

@endsection
