<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::middleware("auth")->prefix("/admin")->name("posts.")->group(function () {
    Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('index');
    Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('show');
    Route::get('/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::put('/posts/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('delete');
});