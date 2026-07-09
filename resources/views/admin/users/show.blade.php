@extends('layouts.admin')

@section('content')
    <h1>{{ $user->name }}</h1>
    <div class="admin-detail-card">
        <div class="detail-row"><span class="detail-label">Email</span><span>{{ $user->email }}</span></div>
    </div>
@endsection
