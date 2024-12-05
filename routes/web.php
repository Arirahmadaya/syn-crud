<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

// Route untuk halaman dashboard
Route::get('/', [VideoController::class, 'index']); // Menampilkan video di dashboard

// Route untuk resource videos (CRUD video)
Route::resource('videos', VideoController::class);
