<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\TransaccionController;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/about', function () {
    return view('nosotros');
});

Route::get('/integrantes', function () {
    return view('integrantes');
});

Route::get('/maps', function () {
    return view('direccion');
});

Route::resource('cats', CategoriaController::class);
Route::resource('club', ClubController::class);
Route::resource('jugador', JugadoresController::class);
Route::resource('transaccion', TransaccionController::class);

// servicios web //

route::get('api/categorias',[CategoriaController::class,'indexREST']);
route::get('api/categorias/{id}',[CategoriaController::class,'showREST']);
route::post('api/categorias',[CategoriaController::class,'storeREST']);
route::put('api/categorias/{id}',[CategoriaController::class,'updateREST']);
route::delete('api/categorias/{id}',[CategoriaController::class,'destroyREST']);

//servicios web //

route::get('apis/clubs',[ClubController::class,'indexREST']);
route::get('apis/clubs/{id}',[ClubController::class,'showREST']);
route::post('apis/clubs',[ClubController::class,'storeREST']);
route::put('apis/clubs/{id}',[ClubController::class,'updateREST']);
route::delete('apis/clubs/{id}',[ClubController::class,'destroyREST']);