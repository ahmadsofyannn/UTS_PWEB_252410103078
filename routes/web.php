<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginProcess'])->name('login.process');


Route::get('/dashboard/{nama}/{nim}', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan/{nama}/{nim}', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile/{nama}/{nim}', [PageController::class, 'profile'])->name('profile');