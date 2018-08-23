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
})->middleware('auth');

Route::get('pacote/requisitar', function () {
    return view('pacotes.requisitar');
});

//Rotas pacote de viagem
Route::resource('pacote', 'PacoteController');
Route::get('pacote/{id}/editimage', 'PacoteController@showaddimages')->name('pacoteimages');
Route::post('pacote/addimages', 'PacoteController@addimages')->name('addimage');
//pedido pacote de viagem
Route::resource('pedidoPacote', 'PedidoPacoteController');
Route::post('pedidoPacote/{id}', 'PedidoPacoteController@viaPacote')->name('addPedidoViaPacote');
Route::post('pedidoPacote/addpassenger/{id}', 'PedidoPacoteController@addPassenger')->name('addPassenger');
Route::post('pedidoPacote/addcontacts/{id}', 'PedidoPacoteController@addContact')->name('addContact');
Route::get('meuspedidos/pacotes/pendentes', 'PedidoPacoteController@pendents')->name('pedidospendentes'); 
Route::get('meuspedidos/pacotes/confirmados', 'PedidoPacoteController@comfirmados')->name('pedidosconfirmados'); 
Route::get('meuspedidos/pacotes/cancelados', 'PedidoPacoteController@cancelados')->name('pedidoscancelados'); 
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
Route::resource('operadores', 'OperadorsController');
Route::post('operadores/add', 'OperadorsController@storeajax')->name('addopera');
Route::get('operadores/editstate/{id}', 'OperadorsController@editstatus')->name('updatestate');
Route::resource('administradores', 'AdministradorController');
Route::get('administradores/editstate/{id}', 'AdministradorController@editstatus')->name('updatestateadmin');
Route::resource('clientes', 'ClienteController');
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
})->name('criarconta'); 
Route::get('login', function () {
    return view('authentication.login');
})->name('login'); 

Route::post('register', 'CustomAuthController@register')->name('register');
Route::get('/logar', 'CustomAuthController@login')->name('logar');
Route::post('logout', 'CustomAuthController@logout')->name('logout');

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
