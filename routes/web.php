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

/*
|--------------------------------------------------------------------------
| Admin section
|--------------------------------------------------------------------------
*/

//Dashboard
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');

//Accounts
Route::get('/account/{id?}', [UserController::class, 'account'])->middleware(['auth'])->name('account');
Route::match(['get', 'post'], '/account/modify/{id?}', [UserController::class, 'modify'])->middleware(['auth'])->name('user.modify');

//Articles
Route::get('admin/articles/', [AdminController::class, 'showArticles'])->name('admin.articles');
Route::get('admin/articles/add', [ArticleController::class, 'add'])->name('admin.articles.add');
Route::post('admin/articles/add/submit', [ArticleController::class, 'addSubmit'])->name('admin.articles.add.submit');
Route::get('admin/articles/edit/{id}', [ArticleController::class, 'edit'])->name('admin.articles.edit');
Route::get('admin/articles/edit/submit', [ArticleController::class, 'editSubmit'])->name('admin.articles.edit.submit');


/*
|--------------------------------------------------------------------------
| Client section
|--------------------------------------------------------------------------
*/
//Articles
Route::get('articles', [ArticleController::class, 'index'])->name('articles');


require __DIR__.'/auth.php';
