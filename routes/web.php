<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EquiposController;

Route::get('/', [InicioController::class, 'index']);
Route::resource('equipos', EquiposController::class)->middleware('auth');
