<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/produk/{slug}', [PageController::class, 'produkDetail'])->name('produk.detail');
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/sitemap.xml', [PageController::class, 'sitemap'])->name('sitemap');
