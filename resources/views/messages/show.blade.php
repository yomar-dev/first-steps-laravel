@extends('layouts.app')

@section('content')

<h1>Mensaje ID: {{ $message->id }}</h1>

<img src="{{ $message->image }}" alt="">

<p>
	{{ $message->content }}
</p>

@endsection