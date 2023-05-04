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
}
