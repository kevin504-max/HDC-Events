<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Eventos;
use App\Models\User;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index() {
        $search = request("search");

        $eventos = ($search)
            ? Eventos::where([["titulo", "LIKE", "%" . $search . "%"]])->get()
            : Eventos::all();


        return view("welcome", ["eventos" => $eventos, "search" => $search]);
    }

    public function create() {
        return view("eventos.create");
    }

    public function store(Request $request) {
        $evento = new Eventos();

        $evento->titulo = $request->titulo;
        $evento->data = $request->data;
        $evento->cidade = $request->titulo;
        $evento->descricao = $request->descricao;
        $evento->items = $request->items;
        $evento->privado = $request->privado;

        if($request->hasFile("imagem") && $request->file("imagem")->isValid()) {
            $request_imagem = $request->imagem;
            $extension = $request_imagem->extension();
            $imageName = md5($request_imagem->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->imagem->move(public_path("img/events"), $imageName);

            $evento->imagem = $imageName;
        }

        $evento->user_id = auth()->user()->id;

        $evento->save();

        return redirect("/")->with("msg", "Evento cadastrado com sucesso!");
    }

    public function show($id) {
        $evento = Eventos::findOrFail($id);

        $evento_dono = User::where("id", $evento->user_id)->first()->toArray();

        return view("eventos.show", ["evento" => $evento, "evento_dono" => $evento_dono]);
    }

    public function dashboard() {
        $user = auth()->user();
        dd($user);
        $eventos = $user->eventos;


        return view("eventos.dashboard", ["eventos" => $eventos]);
    }
}
