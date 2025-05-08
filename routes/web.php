<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\ProfileController;
use App\Models\Film;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmController::class, 'index']);
Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/dashboard', function () {
    $films = Film::all();
    return view('dashboard', compact('films'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('index');
    });

Route::resource('/film', FilmsController::class);
require __DIR__ . '/auth.php';
