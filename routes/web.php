<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');
Route::get('/account/{id?}', [UserController::class, 'account'])->middleware(['auth'])->name('account');
Route::match(['get', 'post'], '/account/modify/{id?}', [UserController::class, 'modify'])->middleware(['auth'])->name('user.modify');

Route::get('articles', [ArticleController::class, 'index'])->name('articles');
Route::get('article/add', [ArticleController::class, 'add'])->name('article.add');

require __DIR__.'/auth.php';
