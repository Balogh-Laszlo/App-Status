<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [AppController::class, 'index']);
Route::get('/app/{app:id}', [AppController::class, 'show']);

Route::get('/features/{feature:id}', [FeatureController::class, 'show']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::get('/favourites', [FavouriteController::class, 'index']);
Route::post('/favourites', [FavouriteController::class, 'store']);

Route::get('/admin/app/create', [AppController::class, 'create'])->middleware('admin');
Route::post('/admin/app/store', [AppController::class, 'store'])->middleware('admin');
Route::get('/admin/feature/create/{app:id}', [FeatureController::class, 'create'])->middleware('admin');
Route::post('/admin/feature/store', [FeatureController::class, 'store'])->middleware('admin');
Route::get('/admin/feature/status/{feature:id}', [FeatureController::class, 'status_update'])->middleware('admin');
Route::post('/admin/feature/status', [FeatureController::class, 'status_store'])->middleware('admin');

