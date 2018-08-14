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
//rotas de passagens
Route::resource('pedidoPassagem', 'PedidoPassagemController');

Route::get('pedidoPassagem/requisicoes', function () {
    return view('passagens.requisicoes');
})->name('pedidospassagem'); 
Route::get('pedidoPassagem/requisicoes/canceladas', function () {
    return view('passagens.requisicoescanceladas');
})->name('pedidospassagemCancelados'); 
Route::get('pedidoPassagem/requisicoes/confirmadas', function () {
    return view('passagens.requisicoesconfirmadas');
})->name('pedidospassagemconfirmados'); 
Route::get('pedidoPassagem/confirmados', function () {
    return view('passagens.meuspedidos.confirmados');
})->name('meusconfirmados');
Route::get('pedidoPassagem/pendentes', function () {
    return view('passagens.meuspedidos.pendentes');
})->name('meuspendentes');
Route::get('pedidoPassagem/cancelados', function () {
    return view('passagens.meuspedidos.cancelados');
})->name('meuscancelados'); 

//rotas de users
Route::get('utilizadores/create', function () {
    return view('utilizadores.create');
})->name('userscreate'); 

Route::get('utilizadores/activos', function () {
    return view('utilizadores.users');
})->name('usersactivos'); 

Route::get('utilizadores/desactivados', function () {
    return view('utilizadores.disabled');
})->name('usersdesactivados'); 

Route::get('utilizadores/clientes', function () {
    return view('utilizadores.clients');
})->name('usersclientes'); 

//  Demo rotas de atuth
Route::get('register', function () {
    return view('authentication.register');
})->name('usersclientes'); 
Route::get('login', function () {
    return view('authentication.login');
})->name('usersclientes'); 