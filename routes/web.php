<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('frontend')->group(function () {
        Route::get('/logout',[FrontendController::class, 'logout']);
        Route::get('/masuk',[FrontendController::class, 'masuk']);
        Route::get('/home',[FrontendController::class, 'home']);
        Route::get('/about',[FrontendController::class, 'about']);
        Route::get('/fantasi',[FrontendController::class, 'fantasi']);
        Route::get('/komedi',[FrontendController::class, 'komedi']);
        Route::get('/romance',[FrontendController::class, 'romance']);
        Route::get('/action',[FrontendController::class, 'action']);
        Route::get('/horor',[FrontendController::class, 'horor']);
        Route::get('/thriller',[FrontendController::class, 'thriller']);
        Route::get('/inspiratif',[FrontendController::class, 'inspiratif']);
    });
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[FrontendController::class, 'index']);
        Route::get('/logout',[FrontendController::class, 'logout']);
        Route::get('/user',[UsersController::class, 'users']);

        Route::get('/produk',[ProdukController::class, 'produk']);
        Route::get('/produk/create',[ProdukController::class, 'create']);
        Route::post('/produk/store',[ProdukController::class, 'store']);
        Route::get('/produk/detail/{id}',[ProdukController::class, 'show']);
        Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/kategori',[KategoriController::class, 'kategori']);
        Route::get('/kategori/create',[KategoriController::class, 'create']);
        Route::post('/kategori/store',[KategoriController::class, 'store']);
        Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
        Route::post('/kategori/update/{id}',[KategoriController::class, 'update']);
        Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

        Route::get('/pesanan',[PesananController::class, 'pesanan']);
        Route::get('/pesanan/create',[PesananController::class, 'create']);
        Route::post('/pesanan/store',[PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}',[PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

        Route::get('/pembelian',[PembelianController::class, 'pembelian']);
        Route::get('/pembelian/create',[PembelianController::class, 'create']);
        Route::post('/pembelian/store',[PembelianController::class, 'store']);
        Route::get('/pembelian/edit/{id}',[PembelianController::class, 'edit']);
        Route::post('/pembelian/update/{id}',[PembelianController::class, 'update']);
        Route::get('/pembelian/delete/{id}', [PembelianController::class, 'destroy']);

        Route::get('/pelanggan',[PelangganController::class, 'pelanggan']);
        Route::get('/pelanggan/create',[PelangganController::class, 'create']);
        Route::post('/pelanggan/store',[PelangganController::class, 'store']);
        Route::get('/pelanggan/edit/{id}',[PelangganController::class, 'edit']);
        Route::post('/pelanggan/update/{id}',[PelangganController::class, 'update']);
        Route::get('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
