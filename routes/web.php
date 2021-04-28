<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

route::get('/', [MoviesController::class, 'index'])->name('movies.index');
route::get('/movie/{id}', [MoviesController::class, 'show'])->name('movies.show');


// Route::get('/', function () {
//     return view('welcome');
// })->name('movies.index');

// Route::get('/show', function () {
//     return view('show');
// })->name('movies.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
