<?php

use App\Http\Controllers\SalasController;
use App\Http\Controllers\GenerosController;
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
Route::prefix('salas')->group(function(){
  Route::get('/', [SalasController::class, 'index'])->name('salas-index'); 
  Route::get('/create', [SalasController::class, 'create'])->name('salas-create'); 
  Route::post('/', [SalasController::class, 'store'])->name('salas-store'); 
  Route::get('/{id}/edit', [SalasController::class, 'edit'])->where ('id','[0-9]+')->name('salas-edit'); 
  Route::put('/{id}', [SalasController::class, 'update'])->where ('id','[0-9]+')->name('salas-update'); 
  Route::delete('/{id}', [SalasController::class, 'destroy'])->where ('id','[0-9]+')->name('salas-destroy');

});

Route::prefix('salas/generos')->group(function(){
  Route::get('/', [GenerosController::class, 'index'])->name('generos-index'); 
  Route::get('/create', [GenerosController::class, 'create'])->name('generos-create'); 
  Route::post('/', [GenerosController::class, 'store'])->name('generos-store'); 
  Route::get('/{id}/edit', [GenerosController::class, 'edit'])->where ('id','[0-9]+')->name('generos-edit'); 
  Route::put('/{id}', [GenerosController::class, 'update'])->where ('id','[0-9]+')->name('generos-update'); 
  Route::delete('/{id}', [GenerosController::class, 'destroy'])->where ('id','[0-9]+')->name('generos-destroy'); 
});

  Route::fallback(function(){
    return "Erro ao localizar a rota!";
});
