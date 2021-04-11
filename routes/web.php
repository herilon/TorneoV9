<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('inicio');
});
Route::get('equipos', function () {
    return view('equipos.index');
});
Route::get('equipos/create', function () {
    return view('equipos.create');
});
Route::get('equipos/{id}', function ($id) {
    return view('equipos.show')
    ->with('id', $id);
});
Route::get('equipos/{id}/edit', function ($id) {
    return view('equipos.edit')
    ->with('id', $id);
});

