@extends("layouts.app")

@section("title", "Cadastrar Evento")
@section("content")
<div id="evento-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o seu evento</h1>
    <form action="/eventos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="iamgem">Imagem Evento:</label>
            <input type="file" id="imagem" name="imagem" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="titulo">Evento:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Entre com um nome...">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Entre com um nome...">
        </div>
        <div class="form-group">
            <label for="privado">O evento é privado?</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="O que vai acontecer no evento..."></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar evento">
    </form>
</div>
@endsection
