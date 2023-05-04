@extends("layouts.main")

@section("title", "Dashboard")

@section("content")
<div class="col-md-10 offset-md-1 dashboard-titulo-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-eventos-container">
    @if ($eventos && $eventos->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/eventos/{{ $evento->id }}">{{ $evento->titulo }}</a></td>
                        <td>0</td>
                        <td>
                            <a href="#">Editar</a>
                            <a href="#">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não tem eventos, <a href="./eventos/create">criar evento</a></p>
    @endif
</div>
@endsection
