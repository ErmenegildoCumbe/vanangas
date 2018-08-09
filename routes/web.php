<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
}); 

Route::get('/detalhes', function () {
    return view('pacotes.detalhes');
});
Route::get('pacote/editimage', function () {
    return view('pacotes.editimages');
});
Route::get('pacote/requisitar', function () {
    return view('pacotes.requisitar');
});
Route::get('pedidoPacote/pendentes', function () {
    return view('pedidospacote.meuspedidos.pendentes');
})->name('pedidospendentes'); 
Route::get('pedidoPacote/confirmados', function () {
    return view('pedidospacote.meuspedidos.confirmados');
})->name('pedidosconfirmados'); 
Route::get('pedidoPacote/cancelados', function () {
    return view('pedidospacote.meuspedidos.cancelados');
})->name('pedidoscancelados'); 
Route::resource('pacote', 'PacoteController');
Route::resource('pedidoPacote', 'PedidoPacoteController');
