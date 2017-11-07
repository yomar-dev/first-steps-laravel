<div class="title m-b-md">
    Aprendiendo Laravel
</div>

@if (isset($teacher))
    <p>{{ $teacher }}</p>
@else
    <p>Developer On Fire</p>
@endif

<div class="links">
    @foreach ($links as $link => $text)
        <a href="{{ $link }}">{{ $text }}</a>
    @endforeach
</div>