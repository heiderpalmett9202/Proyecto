<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes/listar',[ClienteController::class,'listar'])->name('cliente.listar');
Route::get('clientes/create',[ClienteController::class,'create']);
Route::post('clientes/store',[ClienteController::class,'store'])->name('cliente.store');
Route::put('clientes/{cliente}',[ClienteController::class,'update'])->name('cliente.update');
Route::get('clientes/{cliente}/editar',[ClienteController::class,'edit'])->name('cliente.edit');
Route::delete('clientes/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');

