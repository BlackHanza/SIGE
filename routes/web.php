<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/BIpv', function () {
    return view('BIfirstT');
})->name('site.BIpv');;

Route::get('/BIrenov', function () {
    return view('BIrenovar');
})->name('site.BIrenov');;

Route::get('/BIsv', function () {
    return view('BISegV');
})->name('site.BIsv');;


Route::get('/BIinform', function () {
    return view('BIinf');
})->name('site.BIinform');;

Route::get('/REgistoCriminal', function () {
    return view('RegisTratar');
})->name('site.RegistoCriminal');;

Route::get('/RegistoInfo', function () {
    return view('RegisInf');
})->name('site.RegistoInfo');;

Route::get('/ComoUsar', function () {
    return view('CUse');
})->name('site.ComoUsar');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
