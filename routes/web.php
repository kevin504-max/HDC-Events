<?php

use App\Http\Controllers\EventosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventosController::class, "index"]);
Route::get("eventos/create", [EventosController::class, "create"])->middleware("auth");
Route:: get("eventos/{id}", [EventosController::class, "show"]);
Route::post("eventos", [EventosController::class, "store"]);

Route::get("/contato", function () {
    return view("contato");
});

Route::get("/dashboard", [EventosController::class, "dashboard"])->middleware("auth");
