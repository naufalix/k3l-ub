<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashHome;
use App\Http\Controllers\Dashboard\DashNews;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/berita/{news:slug}', [HomeController::class, 'news']);
Route::get('/infografis', [HomeController::class, 'infographic']);
Route::get('/kontak', [HomeController::class, 'contact']);
Route::get('/peraturan', [HomeController::class, 'regulation']);
Route::get('/standar-operasional-prosedur', [HomeController::class, 'sop']);
Route::get('/tentang', [HomeController::class, 'about']);

Route::get('/sample', [HomeController::class, 'sample']);

// DASHBOARD AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// DASHBOARD PAGE
Route::group(['prefix'=> 'dashboard','middleware'=>['auth']], function(){
  Route::get('/', [DashHome::class, 'index']);
  Route::get('/news', [DashNews::class, 'index']);
  
  Route::post('/news', [DashNews::class, 'postHandler']);
});

// API
Route::group(['prefix'=> 'api'], function(){
  Route::get('news/{news:id}', [APIController::class, 'News']);
});