@extends("layouts.app")

@section("title", "Produto")
@if ($busca != "")
    <p>O usuário está buscando por {{ $busca }}</p>
@endif@endsection
@section("content")
