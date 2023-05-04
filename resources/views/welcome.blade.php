@extends("layouts.app")

@section("title", "HDC Events")

@section("content")
<div id="search-container" class="col-md-12">
    <h1>Pesquise por um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite aqui...">
    </form>
</div>
<div id="eventos-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="legenda">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @if($eventos->count() > 0)
            @foreach ($eventos as $evento)
                <div class="card cool-md-3">
                    <img src="{{ asset('img/events/') . $evento->imagem }}" alt="{{ $evento->titulo }}">
                    <div class="card-body">
                        <p class="card-date">03/05/2023</p>
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/eventos/{{ $evento->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
