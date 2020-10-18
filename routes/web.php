<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DespesaController;

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

Auth::routes();

Route::resource('categoria', CategoriaController::class)
    ->name('index', 'categoria')->middleware('auth');
Route::resource('despesa', DespesaController::class)
    ->name('index', 'despesa')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/despesa/{categoria}/categoria', [App\Http\Controllers\DespesaController::class, 'categoria'])->name('despesa.categoria');

