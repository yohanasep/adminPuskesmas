<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('/admin/kalender', [AdminController::class, 'show_kalender']);
Route::get('/admin/daftarPasien', [AdminController::class, 'show_daftarPasien']);
Route::get('/admin/dokumentasi', [AdminController::class, 'show_dokumentasi']);
Route::get('/admin/agenda', [AdminController::class, 'show_agenda']);
Route::get('/admin/petugasMedis', [AdminController::class, 'show_petugasMedis']);