<?php


use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\admin\UsersController;
use Illuminate\Support\Facades\Route;


route::get('/', [MoviesController::class, 'index'])->middleware(['auth',])->name('movies.index');
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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/card', function () {
    return view('card');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('admin/login', [LoginAdminController::class, 'authenticate'])->name('login.admin');
Route::get('admin/users', [UsersController::class, 'index'])->name('user.admin');

Route::get('admin/add-movie', function(){ return view('admin.add-movie'); })->name('admin.add.movie');
Route::get('admin/lis-movie', function(){ return view('admin.list-movie'); })->name('admin.list.movie');
Route::get('admin/member', function(){ return view('admin.member'); })->name('admin.member');
Route::get('admin/subscriber', function(){ return view('admin.subscriber'); })->name('admin.subscriber');






