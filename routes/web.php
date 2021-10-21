<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadController;

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

//mainページ切り替え
Route::get('/main/main1', [App\Http\Controllers\MainController::class, 'main1'])->name('main.main1');

Route::get('/main/main2', [App\Http\Controllers\MainController::class, 'main2'])->name('main.main2');

Route::get('/main/main3', [App\Http\Controllers\MainController::class, 'main3'])->name('main.main3');

Route::get('/main/main4', [App\Http\Controllers\MainController::class, 'main4'])->name('main.main4');

Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'detail'])->name('detail');

Route::get('/management', [App\Http\Controllers\ManagementController::class, 'management'])->name('management');

Route::get('/management/edit/{id}', [App\Http\Controllers\ManagementController::class, 'edit'])->name('management.edit');

Route::post('/management/update', [App\Http\Controllers\ManagementController::class, 'update'])->name('management.update');

Route::get('/management/delete/{id}', [App\Http\Controllers\ManagementController::class, 'delete'])->name('management.delete');

Route::get('/post', [App\Http\Controllers\PostController::class, 'post'])->name('post');

Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

// Route::get('/post', [App\Http\Controllers\PostController::class, 'store'])->name('store');

//リダイレクト系ルート
Route::get("/thankyou", [App\Http\Controllers\RedirectController::class, 'thankyou'])->name('thankyou');

Route::get("/posted", [App\Http\Controllers\RedirectController::class, 'posted'])->name('posted');

Route::get("/deleted", [App\Http\Controllers\RedirectController::class, 'deleted'])->name('deleted');
