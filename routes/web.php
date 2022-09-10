<?php

use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index.view');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index.view');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create.view');
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store.route');


Route::get('/carros', [CarrosController::class, 'index'])->name('carros.index.view');
Route::get('/carros/create', [CarrosController::class, 'create'])->name('carros.create.view');
Route::post('/carros/store', [CarrosController::class, 'store'])->name('carros.store.route');
Route::get('/carros/edit/{id}', [CarrosController::class, 'edit'])->name('carros.edit.view');
Route::put('/carros/update/{id}', [CarrosController::class, 'update'])->name('carros.update.route');

Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index.view');
Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reservas.create.view');
Route::post('/reservas/store', [ReservasController::class, 'store'])->name('reservas.store.route');
