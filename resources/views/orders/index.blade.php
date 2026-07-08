@extends('layouts.app')

@section('content')

    <h1>Sİparişler</h1>

    @foreach($orders as $order)
        <div>
            <p>{{ $order->user->name }}</p>
        </div>
    @endforeach

@endsection
