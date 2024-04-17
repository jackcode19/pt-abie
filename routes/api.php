<?php

use App\Http\Controllers\Api\ShowDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('show-about', [ShowDataController::class, 'showAbout']);

Route::get('show-service', [ShowDataController::class, 'showService']);
Route::get('show-service/{id}', [ShowDataController::class, 'detailService']);

Route::get('show-client', [ShowDataController::class, 'showClient']);
Route::get('show-client/{id}', [ShowDataController::class, 'detailClient']);

Route::get('show-product', [ShowDataController::class, 'showProduct']);
Route::get('detail-product', [ShowDataController::class, 'detailProduct']);

Route::get('show-contact-information', [ShowDataController::class, 'showContact']);

Route::get('show-article', [ShowDataController::class, 'showArticle']);
Route::get('detail-article', [ShowDataController::class, 'detailArticle']);
