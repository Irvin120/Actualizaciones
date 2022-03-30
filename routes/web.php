<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SearchController;
//hacer referencia al espacio de nombres donde se encuentra el controlador TemperaturaController
use App\Http\Controllers\TemperaturaController;
//hacer referencia al espacio de nombres donde se encuentra el controlador UsuarioController
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::get('/register',[RegisterController::class,'create'])->name('register.index')/* ->middleware('auth') */;
Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/login',[SessionsController::class,'create'])->name('login.index');
Route::post('/login',[SessionsController::class,'store'])->name('login.store');
Route::get('/logout',[SessionsController::class,'destroy'])->name('login.destroy');

Route::get('/search',[SearchController::class,'create'])->name('search.index')->middleware('auth');

//ruta de recursos que responda cuando se escriba en la url search
Route::resource('/search',TemperaturaController::class)->middleware('auth');

//ruta de recursos que responda cuando se escriba en la url /usuario
Route::resource('/usuario',UsuarioController::class)->middleware('auth');
