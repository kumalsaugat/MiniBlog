<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/',[App\Http\Controllers\HomeController::class, 'show'])->name('home.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    //Dashboard
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');

    //Post
    Route::get('/post',[App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::post('/post',[App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/post/edit/{id}',[App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/edit/{id}',[App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::get('/post/delete/{id}',[App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
});




require __DIR__.'/auth.php';
