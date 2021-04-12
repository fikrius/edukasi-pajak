<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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
    return view('beranda');
});

Route::get('/{page}', PageController::class)
->name('page')
->where('page', 'beranda');
// ->where('page', 'beranda|kontak');

Auth::routes(['register' => false, 'login' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Artikel
// Route::get('/artikel', [App\Http\Controllers\ArticleController::class, 'index'])->name('artikel');
// Route::get('/get-data-kategori', [App\Http\Controllers\CategoryController::class, 'getKategori']);

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});