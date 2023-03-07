<?php

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

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/account/{id?}', [UserController::class, 'account'])->middleware(['auth'])->name('account');
Route::match(['get', 'post'], '/account/modify/{id?}', [UserController::class, 'modify'])->middleware(['auth'])->name('user.modify');

require __DIR__.'/auth.php';
