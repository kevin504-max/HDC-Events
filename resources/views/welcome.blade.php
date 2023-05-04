@extends("layouts.app")

@section("title", "HDC Events")

@section("content")
@if($eventos->count() > 0)
    @foreach ($eventos as $evento)
        <p>{{ $evento->titulo . "--" . $evento->descricao }}</p>
    @endforeach
@endif
@endsection
