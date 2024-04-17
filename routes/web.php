<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
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
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('about/manage', [AboutController::class, 'manage'])->name('about.manage');
Route::put('about/update/{id}', [AboutController::class, 'update'])->name('about.update');

Route::group(['prefix' => 'service', 'as' => 'service.'], function() {
    Route::get('/manage', [ServiceController::class, 'manage'])->name('manage');
    Route::get('/data', [ServiceController::class, 'getData'])->name('data');
    Route::get('/create', [ServiceController::class, 'create'])->name('create');
    Route::post('/store', [ServiceController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ServiceController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'client', 'as' => 'client.'], function() {
    Route::get('/manage', [ClientController::class, 'manage'])->name('manage');
    Route::get('/data', [ClientController::class, 'getData'])->name('data');
    Route::get('/create', [ClientController::class, 'create'])->name('create');
    Route::post('/store', [ClientController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ClientController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ClientController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'category', 'as' => 'category.'], function() {
    Route::get('/manage', [CategoryProductController::class, 'manage'])->name('manage');
    Route::get('/data', [CategoryProductController::class, 'getData'])->name('data');
    Route::get('/create', [CategoryProductController::class, 'create'])->name('create');
    Route::post('/store', [CategoryProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryProductController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function() {
    Route::get('/manage', [ProductController::class, 'manage'])->name('manage');
    Route::get('/data', [ProductController::class, 'getData'])->name('data');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function() {
    Route::get('/manage', [ContactController::class, 'manage'])->name('manage');
    Route::put('/update/{id}', [ContactController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'slider', 'as' => 'slider.'], function() {
    Route::get('/manage', [SliderController::class, 'manage'])->name('manage');
    Route::get('/data', [SliderController::class, 'getData'])->name('data');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/store', [SliderController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => 'article', 'as' => 'article.'], function() {
    Route::get('/manage', [ArticleController::class, 'manage'])->name('manage');
    Route::get('/data', [ArticleController::class, 'getData'])->name('data');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ArticleController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ArticleController::class, 'delete'])->name('delete');
});


// Pending Fifur
Route::group(['prefix' => 'team', 'as' => 'team.'], function() {
    Route::get('/manage', [TeamController::class, 'manage'])->name('manage');
    Route::get('/data', [TeamController::class, 'getData'])->name('data');
    Route::get('/create', [TeamController::class, 'create'])->name('create');
    Route::post('/store', [TeamController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [TeamController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TeamController::class, 'delete'])->name('delete');
});


// Frontend

Route::get('/home', [HomeController::class, 'index'])->name('home');