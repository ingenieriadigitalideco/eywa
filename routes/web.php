<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('finca', 'FincaController');
Route::resource('log', 'LogController');
Route::resource('tarro', 'TarroController');
Route::resource('planilla_empacador', 'PlanillaEmpacadorController');
Route::resource('planilla_supervisor', 'PlanillaSupervisorController');