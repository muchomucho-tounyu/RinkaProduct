<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MypageController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/users', [PostController::class, 'searche'])->name('users.search');
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'delete']);
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::middleware('auth')->group(function () {
    Route::post('/posts/{post}/favorite', [FavoriteController::class, 'toggle'])->name('posts.favorite.toggle');
});
Route::middleware('auth')->group(function () {
    Route::post('/posts/{post}/visit', [VisitController::class, 'toggle'])->name('posts.visit/toggle');
});
Route::middleware('auth')->group(function () {
    Route::get('/mypage', [App\Http\Controllers\MypageController::class, 'index'])->name('mypage.index');
});
Route::get('/users', [UserController::class, 'index'])->name('users.index');
