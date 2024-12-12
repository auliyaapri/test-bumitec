<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/spareparts', [App\Http\Controllers\SparepartController::class, 'create'])->name('spareparts');
Route::get('/spareparts/{id}', [App\Http\Controllers\SparepartController::class, 'show'])->name('spareparts-detail');
Route::post('/spareparts', [App\Http\Controllers\SparepartController::class, 'store'])->name('spareparts-store');
Route::put('/spareparts/{id}', [App\Http\Controllers\SparepartController::class, 'update'])->name('spareparts-update');
Route::delete('/spareparts/{id}', [App\Http\Controllers\SparepartController::class, 'destroy'])->name('spareparts-destroy');



Route::get('/suppliers', [App\Http\Controllers\SupplierController::class, 'create'])->name('suppliers');
Route::post('/suppliers', [App\Http\Controllers\SupplierController::class, 'store'])->name('suppliers-store');



Route::get('/category', [App\Http\Controllers\CategoryController::class, 'create'])->name('category');
Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category-store');


Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report');