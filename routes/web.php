<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoutiqueController;

Route::get('/', [BoutiqueController::class, 'index'])->name('boutique');
Route::get('/detail/{id}', [BoutiqueController::class, 'show'])->name('boutiques.show');
