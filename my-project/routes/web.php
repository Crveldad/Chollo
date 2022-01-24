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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

//ruta estática
Route::get('chollos', [PagesController::class, 'chollos'])->name('chollos');

//esta, dinámica
Route::get('chollo/{id?}', [ PagesController::class, 'detalle' ]) -> name('chollo.detalle');

Route::get('crear', [ PagesController::class, 'crear']) -> name('crear');
Route::post('crear', [ PagesController::class, 'crear' ]) -> name('chollo.crear');