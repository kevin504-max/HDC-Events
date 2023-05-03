<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/contato", function () {
    return view("contato");
});

Route::get("/produto/{id?}", function ($id = null) {
    $busca = request("search");

    return view("produto", ["id" => $id]);
});

Route::get("/produtos/{id?}", function ($id = null) {
    return view("produtos", ["id" => $id]);
});
