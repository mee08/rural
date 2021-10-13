<?php

use Illuminate\Support\Facades\Route;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\TopController::class, 'top'])->name('top');

Route::get('/detail', [App\Http\Controllers\DetailController::class, 'detail'])->name('detail');

Route::get('/management', [App\Http\Controllers\ManagementController::class, 'management'])->name('management');

Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');

//リダイレクト系ルート
Route::get("/thankyou", [App\Http\Controllers\RedirectController::class, 'thankyou'])->name('thankyou');
