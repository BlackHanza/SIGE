<?php
use App\Http\Controllers\Tipo_AcessosController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route:: get('/login', function(){return view('auth.login');})->name('login');
Route::resource('/conta', 'UsersController');
Route:: get('/app', function(){return view('layouts.app');})->name('gil');



/*GUEST*/

Route::get('/guest', function () { return view('site.home');})->name('guest');;
Route::get('/convidado', function () { return view('site.convidado');})->name('guest');;
Route::get('/binformacao', function () { return view('site.BInfo');})->name('site.binformacao');
Route::get('/rinformacao', function () { return view('site.Reginfo');})->name('site.rinformacao');
Route::get('/ajuda', function () { return view('site.ComoUsar');})->name('site.ajuda');



//Utente

Route::get('/home', function () {return view('utente.pages.home');})->name('utente');;


Route::get('/bilhete/primeiravia', 'Tipo_ServicosController@createPrimeira')->name('primeiravia');;
Route::post('/bilhete', 'Tipo_ServicosController@storePrimeira')->name('primeira.store');;


Route::get('/bilhete/renovar', 'Tipo_ServicosController@createRenovar')->name('renovar');;
Route::post('/renovar', 'Tipo_ServicosController@storeRenovar')->name('renovar.store');;


Route::get('/bilhete/segundavia', 'Tipo_ServicosController@createSegunda')->name('segundavia');;
Route::post('/segunda', 'Tipo_ServicosController@storeSegunda')->name('segunda.store');;


Route::get('/bilhete/averbar', 'Tipo_ServicosController@createAverbar')->name('averbar');
Route::post('/averbar', 'Tipo_ServicosController@storeAverbar')->name('averbar.store');


Route::get('bilhete/informacao', function () {return view('utente.pages.biInfo');})->name('bilheteinfo');

Route::get('/registocriminal', 'Tipo_ServicosController@createRegisto')->name('registocriminal');
Route::post('/registocrimainal', 'Tipo_ServicosController@storeRegisto')->name('registo.store');

Route::get('registocriminal/informacao', function () {return view('utente.pages.regisinfo');})->name('registoinfo');

Route::get('/registos', 'Tipo_ServicosController@indexUtente')->name('utente.registos');

//Route::resource('conta','UsersController');

//Admin

Route::get('/dashboard', function () { return view('admin.pages.inicio');})->name('admin');;

Route::get('/registos/reprovados', function () { return view('admin.pages.reprovados');})->name('reprovados');;

Route::get('/registos/aprovados', function () { return view('admin.pages.aprovados');})->name('aprovados');;


Route::resource('/funcionario','FuncionariosController');

Route::resource('/user', 'FuncionariosController');

Route::resource('/suporte', 'SuportesController');

Route::get('/registosindex','Tipo_ServicosController@indexAdmin')->name('AdminRegisto');



Route::get('/registos/{visao}', 'Tipo_ServicosController@show')->name('servico.show');;

Route::get('/registos/form/{visao}','Tipo_ServicosController@showAdmin')->name('form.show');

Route::get('/registos/formu/{visa}','Tipo_ServicosController@showSegunda')->name('form.segunda.show');
Route::get('/registos/delete/{visa}','Tipo_ServicosController@destroy')->name('form.segunda.delete');

Route::get('/registos/formula/{visao}','Tipo_ServicosController@showPrimeira')->name('form.show.primeira');

Route::get('/registos/formulario/{visao}','Tipo_ServicosController@showUtente')->name('formulario.show');

Route::get('/user/{visao}','UsersController@show')->name('users.show');

Route::get('/registos/form/{visao}/edit','Tipo_ServicosController@editCriminal')->name('edit.criminal');

Route::put('/registos/form/{visao}/editcriminal/upd','Tipo_ServicosController@updateCriminal')->name('update.criminal');















