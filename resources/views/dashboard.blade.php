@extends("layouts.main")

@section("title", "Dashboard")

@section("content")
<div class="col-md-10 offset-md-1 dashboard-titulo-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-eventos-container">
    @if ($eventos->count() > 0)

    @else
        <p>Você ainda não tem eventos, <a href="./eventos/create">criar evento</a></p>
    @endif
</div>
@endsection
