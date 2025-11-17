<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GSCController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/youtube-rss', [HomeController::class, 'YTRSS']);
Route::get('/tentang-kami', [AboutController::class, 'about']);
Route::get('/artikel', [ArticleController::class, 'article']);
Route::get('/berita', [NewsController::class, 'news']);

// Artikel
Route::get('/artikel/{id}', [ArticleController::class, 'detail']);
Route::get('/berita/{id}', [NewsController::class, 'detail']);

// Produk
Route::get('/produk', [ProductController::class, 'product']);
Route::get('/produk/{c_alt}/{i_alt}', [ProductController::class, 'detail']);

// Karir
Route::get('/karir', [KarirController::class, 'karir']);
Route::post('/karir/{positionId}', [KarirController::class, 'add']);

// Kontak
Route::get('kontak', [ContactController::class, 'contact']);

// GSC
Route::get('gsc', [GSCController::class, 'gsc']);
Route::post('gsc/post', [GSCController::class, 'submitForm']);

// Search
Route::get('/search-items', [MasterController::class, 'searchItems']);
Route::post('/newuser', [MasterController::class, 'newsletter']);
