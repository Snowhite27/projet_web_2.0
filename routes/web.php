<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Reservation;
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


/*
|--------------------------------------------------------------------------
| Admin section
|--------------------------------------------------------------------------
*/

//Dashboard
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('admin');

//Accounts
Route::get('/account/add', [UserController::class, 'add'])->middleware(['auth'])->name('user.add');
Route::post('/account/add/submit', [UserController::class, 'addSubmit'])->middleware(['auth'])->name('user.add.submit');
Route::get('/account/{id?}', [UserController::class, 'account'])->middleware(['auth'])->name('account');
Route::match(['get', 'post'], '/account/modify/{id?}', [UserController::class, 'modify'])->middleware(['auth'])->name('user.modify');
Route::delete('/account/remove/{id}', [UserController::class, 'remove'])->middleware(['auth'])->name('user.remove');

//Articles
Route::get('admin/articles/', [AdminController::class, 'showArticles'])->middleware(['auth'])->name('admin.articles');
Route::get('admin/articles/add', [ArticleController::class, 'add'])->middleware(['auth'])->name('admin.articles.add');
Route::post('admin/articles/add/submit', [ArticleController::class, 'addSubmit'])->middleware(['auth'])->name('admin.articles.add.submit');
Route::get('admin/articles/edit/{id}', [ArticleController::class, 'edit'])->middleware(['auth'])->name('admin.articles.edit');
Route::post('admin/articles/edit/submit/{id}', [ArticleController::class, 'editSubmit'])->middleware(['auth'])->name('admin.articles.edit.submit');
Route::delete('/admin/articles/remove/{id}', [ArticleController::class, 'remove'])->middleware(['auth'])->name('admin.articles.remove');

//Packages
Route::get('admin/packages/', [AdminController::class, 'showPackages'])->middleware(['auth'])->name('admin.packages');
Route::get('admin/packages/add', [PackageController::class, 'add'])->middleware(['auth'])->name('admin.packages.add');
Route::post('admin/packages/add/submit', [PackageController::class, 'addSubmit'])->middleware(['auth'])->name('admin.packages.add.submit');
Route::get('admin/packages/edit/{id}', [PackageController::class, 'edit'])->middleware(['auth'])->name('admin.packages.edit');
Route::post('admin/packages/edit/submit/{id}', [PackageController::class, 'editSubmit'])->middleware(['auth'])->name('admin.packages.edit.submit');
Route::delete('/admin/packages/remove/{id}', [PackageController::class, 'remove'])->middleware(['auth'])->name('admin.packages.remove');

//Activities
Route::get('admin/activities/', [AdminController::class, 'showActivities'])->middleware(['auth'])->name('admin.activities');
Route::get('admin/activities/add', [ActivityController::class, 'add'])->middleware(['auth'])->name('admin.activities.add');
Route::post('admin/activities/add/submit', [ActivityController::class, 'addSubmit'])->middleware(['auth'])->name('admin.activities.add.submit');
Route::get('admin/activities/edit/{id}', [ActivityController::class, 'edit'])->middleware(['auth'])->name('admin.activities.edit');
Route::post('admin/activities/edit/submit/{id}', [ActivityController::class, 'editSubmit'])->middleware(['auth'])->name('admin.activities.edit.submit');
Route::delete('/admin/activities/remove/{id}', [ActivityController::class, 'remove'])->middleware(['auth'])->name('admin.activities.remove');

// Reservations
Route::get('admin/reservations/', [AdminController::class, 'showReservations'])->middleware(['auth'])->name('admin.reservations');
Route::delete('/admin/reservations/remove/{id}', [ReservationsController::class, 'remove'])->middleware(['auth'])->name('admin.reservations.remove');

/*
|--------------------------------------------------------------------------
| Client section
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

//Activities
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/virtualr', [ActivityController::class, 'virtualr'])->name('virtualr');

//Articles
Route::get('/actualities', [ArticleController::class, 'customerIndex'])->name('actualities');
// Reservations
Route::get('/reservations', [ReservationsController::class, 'customerIndex'])->name('reservations');
Route::get('/packages/{id}', [ReservationsController::class, 'get'])->name('packages');
Route::get('/calendar/{month}/{year}', [ReservationsController::class, 'getCalendar'])->name('calendar');
Route::post('/reservations', [ReservationsController::class, 'save'])->name('reservation.save');
Route::get('/delete/{id}', [ReservationsController::class, 'delete'])->name('delete');

//Contact
Route::get('/contact', function () {
    return view('contact');
});


require __DIR__ . '/auth.php';
