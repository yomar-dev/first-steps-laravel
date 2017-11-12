@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Laratter</h1>

        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link" href="/" title="Home">Home</a></li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <form action="/message/create" method="post">
            <div class="form-group">
                <input type="text" name="message" class="form-control" placeholder="Que estás pensando?">
            </div>
        </form>
    </div>

    <div class="row">
        @forelse ($messages as $message)
            <div class="col-6">
                <img class="img-thumbnail" src="{{ $message->image }}" alt="">
                <p class="card-text">
                    {{ $message->content }}
                    <a href="/messages/{{ $message->id }}">Leer más</a>
                </p>
            </div>
        @empty
            <p>No hay mensajes</p>
        @endforelse
    </div>
@endsection