@extends("layouts.main")

@section("title", "HDC Events")

@section("content")
<div id="search-container" class="col-md-12">
    <h1>Pesquise por um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite aqui...">
    </form>
</div>
<div id="eventos-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="legenda">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($eventos as $evento)
            <div class="card cool-md-3">
                <img src="{{ asset('img/events/') . $evento->imagem }}" alt="{{ $evento->titulo }}">
                <div class="card-body">
                    <p class="card-date">{{ date("d/m/Y", strtotime($evento->data)) }}</p>
                    <h5 class="card-title">{{ $evento->titulo }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/eventos/{{ $evento->id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if($eventos->count() == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif($eventos->count() == 0)
            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>
@endsection
