<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeBackend;
use App\Http\Controllers\Backend\CustomerBackend;
use App\Http\Controllers\Backend\UserBackend;
use App\Http\Controllers\Backend\KategoriBackend;
use App\Http\Controllers\Backend\SubkategoriBackend;
use App\Http\Controllers\Backend\ProdukBackend;
use App\Http\Controllers\Backend\PesananBackend;
use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\Frontend\HomeFrontend;
use App\Models\Backend\Subkategori;

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

Route::get('/', [HomeFrontend::class, 'index']);

Route::get('backend/home', [HomeBackend::class, 'index'])->name('home');
Route::resource('backend/customer', CustomerBackend::class);
Route::resource('backend/kategori', KategoriBackend::class);
Route::resource('backend/subkategori', SubkategoriBackend::class);
Route::resource('backend/produk', ProdukBackend::class);
Route::resource('backend/pesanan', PesananBackend::class);

Route::resource('backend/user', UserBackend::class);





