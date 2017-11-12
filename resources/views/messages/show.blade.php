@extends('layouts.app')

@section('content')

<h1 class="h3">Mensaje ID: {{ $message->id }}</h1>

<img src="{{ $message->image }}" alt="" class="img-thumbnail">

<p class="card-text">
	{{ $message->content }}

	<small class="text-muted">{{ $message->created_at }}</small>
</p>

@endsection