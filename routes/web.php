<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MovimientoController;
use App\Exports\MovimientosExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/productos', ProductoController::class);
Route::resource('/movimientos', MovimientoController::class);


Route::get('/reporte-movimientos-pdf', [MovimientoController::class, 'descargarPDF'])->name('movimientos.reporte.pdf');



