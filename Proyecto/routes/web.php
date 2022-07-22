<?php

use App\Http\Controllers\autosController;
use App\Http\Controllers\personasController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\MenuController;
use App\Models\autos;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TableController;

Route::get('/home', function () {return view('home');});
Route::get('/formulario', function(){return View('formulario');})->name('home');
Route::post('guardar', [autosController::class, 'guardar'])->name('guardar');
Route::post('guardarPersonas', [personasController::class, 'guardar'])->name('guardarPersonas');
Route::get('listarpersonas', [personasController::class, 'lista'])->name('listarpersonas');
Route::get('editarpersonas/{id}', [personasController::class, 'editar'])->name('editarpersonas');
Route::post('editaPersona', [personasController::class, 'editap'])->name('editaPersona');
Route::get('elimarpersona/{id}', [personasController::class, 'eliminap'])->name('elimarpersona');

/* ES PARA MANDAR LLAMAR LA PAGINA DE CREAR CITAS E INSERTAR DATOS   */
Route::get('/crear', function(){return View('crear');})->name('crear');
Route::post('guardarCitas', [CitasController::class, 'guardar'])->name('guardarCitas');
Route::get('citas', [CitasController::class, 'citaslista'])->name('citas');


Auth::routes();
Route::get('/ds', [App\Http\Controllers\HomeController::class, 'index'])->name('ds');
Route::get('/menutest', [MenuController::class, 'index'])->name('menu-test');
Route::get('/users', [TableController::class, 'index'])->name('users.index');

Route::get('eliminar/{id}', [TableController::class, 'destroy'])->name('eliminar.destroy');
//Route::delete('/user/{id}', 'TableController@destroy')->name('users.destroy');