<?php

use App\Http\Controllers\User\HomeController;
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

Route::resource('/',HomeController::class);

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');


//User
Route::get('/user_home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user_home');
Route::get('/user_detail_produk/{id}', [App\Http\Controllers\User\ProdukController::class, 'detail_produk'])->name('user_detail_produk');
Route::post('/user_buat_pesanan', [App\Http\Controllers\User\ProdukController::class, 'user_buat_pesanan'])->name('user_buat_pesanan');
Route::get('/user_pemesanan/{kode_transaksi}', [App\Http\Controllers\User\ProdukController::class, 'user_pilih_metode_bayar'])->name('user_pilih_metode_bayar');
Route::post('/user_post_bayar/{kode_transaksi}', [App\Http\Controllers\User\ProdukController::class, 'user_post_metode_bayar'])->name('user_pilih_metode_bayars');
Route::get('/user_riwayat_pesanan/{kode_transaksi}', [App\Http\Controllers\User\ProdukController::class, 'user_riwayat_pesanan'])->name('user_riwayat_pesanan');
Route::post('/user_upload_bukti_pembayaran/{kode_transaksi}', [App\Http\Controllers\User\ProdukController::class, 'upload_bukti_pembayaran'])->name('upload_bukti_pembayaran');

//Admin
Route::get('/admin_home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
Route::get('/produk', [App\Http\Controllers\Admin\ProdukController::class, 'index'])->name('produk');
Route::get('/tambah_produk', [App\Http\Controllers\Admin\ProdukController::class, 'create'])->name('tambah_produk');
Route::get('/edit_produk/{id}', [App\Http\Controllers\Admin\ProdukController::class, 'editt'])->name('edit_produk');
Route::post('/simpan_produk', [App\Http\Controllers\Admin\ProdukController::class, 'store'])->name('simpan_produk');
Route::post('/update_produk/{id}', [App\Http\Controllers\Admin\ProdukController::class, 'update'])->name('update_produk');
Route::get('/hapus_produk/{id}', [App\Http\Controllers\Admin\ProdukController::class, 'destroy'])->name('hapus_produk');

Route::get('/pesanan_produk', [App\Http\Controllers\Admin\PesananController::class, 'index'])->name('pesanan_produk');
Route::get('/invoice_produk', [App\Http\Controllers\Admin\PesananController::class, 'invoice'])->name('invoice_produk');


//Admin Klinik
Route::get('/admin_klinik_home', [App\Http\Controllers\AdminKlinik\HomeController::class, 'index'])->name('admin_klinik_home');