<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('invitados.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('index', function () {
    return view('invitados/index');
});

//-----Ventas---------------------------------------------------------------------------
Route::get('/admin/sellings', [VentaController::class, 'index'])->name('admin.sellings');
Route::get('/admin/sellings/create', [VentaController::class, 'create'])->name('admin.sellings.create');
Route::post('/admin/sellings/store', [VentaController::class, 'store'])->name('admin.sellings.store');
Route::delete('/admin/sellings/destroy/{id}', [VentaController::class, 'destroy'])->name('admin.sellings.destroy');
Route::get('/admin/sellings/edit/{id}', [VentaController::class, 'edit'])->name('admin.sellings.edit');
Route::patch('/admin/sellings/edit/{id}', [VentaController::class, 'update'])->name('admin.sellings.update');
Route::get('/admin/sellings/{id}', [VentaController::class, 'view'])->name('admin.sellings.update');
//-----Inventarios----------------------------------------------------------------------
require __DIR__.'/auth.php';
