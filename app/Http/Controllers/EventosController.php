<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index() {
        $eventos = Eventos::all();

        return view("welcome", ["eventos" => $eventos]);
    }

    public function create() {
        return view("eventos.create");
    }

    public function store(Request $request) {
        $evento = new Eventos();

        $evento->titulo = $request->titulo;
        $evento->cidade = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->privado = $request->privado;

        if($request->hasFile("imagem") && $request->file("imagem")->isValid()) {
            $request_imagem = $request->imagem;
            $extension = $request_imagem->extension();
            $imageName = md5($request_imagem->getClientOriginalName() . strtotime("now") . "extension");

            $request->imagem->move(public_path("img/events"), $imageName);

            $evento->imagem = $imageName;
        }

        $evento->save();

        return redirect("/")->with("msg", "Evento cadastrado com sucesso!");
    }
}
