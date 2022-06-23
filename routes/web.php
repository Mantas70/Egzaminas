<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[QueryController::class,'index']);
Route::get('/logout',[LoginController::class, 'logout']);
Route::post('/store',[QueryController::class,'storeQuery']);
Route::get('/view-queries',[QueryController::class,'viewQueries']);
Route::get('/add-query',[QueryController::class,'createQuery']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
