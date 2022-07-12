<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(["prefix" => "/contato"], function(){
    Route::get('/', [ContatoController::class, "index"]);
    Route::get("/show/{id}", [ContatoController::class, "show"]);
    Route::post('/create', [ContatoController::class, "create"]);
    Route::put('/update/{id}', [ContatoController::class, "update"]);
    Route::delete('/delete/{id}', [ContatoController::class, "destroy"]);

});

Route::group(["prefix" => "/produtos"], function(){
    Route::get('/', [ProdutoController::class, "index"]);
    Route::get("/show/{id}", [ProdutoController::class, "show"]);
    Route::post('/create', [ProdutoController::class, "create"]);
    Route::put('/update/{id}', [ProdutoController::class, "update"]);
    Route::delete('/delete/{id}', [ProdutoController::class, "destroy"]);

});



