<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LoginBackend;
use App\Http\Controllers\Backend\HomeBackend;
use App\Http\Controllers\Backend\UserBackend;
use App\Http\Controllers\Backend\CustomerBackend;
use App\Http\Controllers\Backend\KategoriBackend;
use App\Http\Controllers\Backend\BeritaBackend;
use App\Http\Controllers\Backend\ProdukBackend;
use App\Http\Controllers\Backend\PesananBackend;
use App\Http\Middleware\IsAdmin;

use App\Http\Controllers\Auth\CustomerAuth;
use App\Http\Controllers\Frontend\KeranjangFrontend;
use App\Http\Controllers\Frontend\CheckoutFrontend;
use App\Http\Controllers\Frontend\PageFrontend;
use App\Http\Controllers\Frontend\CustomerFrontend;
use App\Http\Controllers\Frontend\HomeFrontend;

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

// Rute Login Backend
Route::get('/login', [LoginBackend::class, 'index'])->name('login');
Route::post('/login', [LoginBackend::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginBackend::class, 'logout'])->name('logout');

// Route untuk Customer Login
Route::get('/customer/login', [CustomerAuth::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerAuth::class, 'login']);

Route::get('/customer/signup', [CustomerAuth::class, 'showSignUpForm'])->name('customer.signup');
Route::post('/customer/signup', [CustomerAuth::class, 'signUp']);

Route::post('/customer/logout', [CustomerAuth::class, 'logout'])->name('customer.logout');
// Rute Backend dengan middleware auth dan is_admin
Route::middleware(['auth'])->group(function () {
    Route::get('backend/home', [HomeBackend::class, 'index'])->name('home');
    Route::resource('backend/customer', CustomerBackend::class);
    Route::resource('backend/kategori', KategoriBackend::class);
    Route::resource('backend/berita', BeritaBackend::class);
    Route::resource('backend/produk', ProdukBackend::class); 
    Route::resource('backend/pesanan', PesananBackend::class);
});

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::post('backend/getIdProduk', [PesananBackend::class, 'getIdProduk'])->name('backend/getIdProduk');
    Route::resource('backend/user', UserBackend::class);
});

// Rute untuk Frontend

Route::get('/', [HomeFrontend::class, 'index']);
// Route::resource('/produk', ProdukFrontend::class);
Route::get('/page/produk', [PageFrontend::class, 'produk']);
// Route::get('/page/produk/{id}', [PageFrontend::class, 'detail']);
Route::get('/page/detail', [PageFrontend::class, 'detail']);
Route::get('/page/mitra', [PageFrontend::class, 'mitra']);
Route::get('/page/tentang', [PageFrontend::class, 'tentang']);

// Halaman profil customer
Route::get('/customer/profile', [CustomerFrontend::class, 'customerdetail'])->name('customer.profile');

// Route untuk menampilkan form edit profil customer
Route::get('/customer/profile/edit', [CustomerFrontend::class, 'editProfile'])->name('customer.profile.edit');

// Route untuk memperbarui profil customer
Route::post('/customer/profile', [CustomerFrontend::class, 'updateProfile'])->name('customer.updateProfile');

Route::get('/page/blog', [PageFrontend::class, 'blog']);
Route::get('/blog/details/{id}', [PageFrontend::class, 'blogdetails'])->name('blogdetails'); 
Route::get('/cart/keranjang', [KeranjangFrontend::class, 'index']);
Route::post('/cart/add', [KeranjangFrontend::class, 'addToCart'])->name('cart.add');
Route::post('/cart/keranjang/update', [KeranjangFrontend::class, 'updateCart']);
Route::post('/cart/keranjang/delete', [KeranjangFrontend::class, 'removeItem']);
Route::get('/cart/keranjang/checkout', [CheckoutFrontend::class, 'showCheckout'])->name('checkout.show');
Route::post('/cart/keranjang/checkout', [CheckoutFrontend::class, 'processCheckout'])->name('checkout.process');