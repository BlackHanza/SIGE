<?php

use App\Http\Controllers\Tipo_AcessosController;
use Illuminate\Support\Facades\Route;


/*GUEST*/

Route::get('/bemvindo', function () { return view('site.home');});
Route::get('/binformacao', function () { return view('site.BInfo');});
Route::get('/rinformacao', function () { return view('site.Reginfo');});
Route::get('/ajuda', function () { return view('site.ComoUsar');});


//Utente


Route::resource('primeiravez', 'Tipo_AcessosController');

Route::get('/BemVindo', function () {
    return view('utente.pages.home');
});

Route::get('/primeiravez', function () {
    return view('utente.pages.bipv');
})->name('utente.primeiravez');;

Route::get('/renovar', function () {
    return view('utente.pages.biRenov');
})->name('utente.BIrenov');;

Route::get('/averbar', function () {
    return view('utente.pages.averbar');
})->name('utente.averbar');;

Route::get('/segundavia', function () {
    return view('utente.pages.biSegV');
})->name('utente.BIsv');;

Route::get('/biinformacao', function () {
    return view('utente.pages.biInfo');
})->name('utente.BIinfo');;

Route::get('/registocriminal', function () {
    return view('utente.pages.regis');
})->name('utente.RegistoCriminal');;

Route::get('/rcinformacao', function () {
    return view('utente.pages.regisinfo');
})->name('utente.RegistoInfo');;

Route::get('/contacto', function () {
    return view('utente.pages.contacto');
})->name('utente.Ucontacto');;



Route:: get('/login', function(){
    return view('auth.passwords.login');
});;

Route::get('/sigespe', function () {
    return view('admin.inicio');
})->name('');
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function () {
            return view('admin.pages.dashboard');
        });        
    });

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cadastro', 'Tipo_AcessosController');
Route::resource('utilizador','UsersController');


