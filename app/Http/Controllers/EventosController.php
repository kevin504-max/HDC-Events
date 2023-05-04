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
        $evento->save();

        return redirect("/");
    }
}
