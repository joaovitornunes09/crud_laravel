<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get('/', function() {
        return view('principal');
    })->name('principal'); 
    Route::get('/contato', function() {
        return view('contato');
    })->name('contato');
    Route::get('/produtos', function() {
        return view('produtos');
    })->name('produtos');
    