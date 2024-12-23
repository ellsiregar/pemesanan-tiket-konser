<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\DiskonController;
use App\Http\Controllers\Backend\KategoriTiketController;
use App\Http\Controllers\Backend\KonserController;
use App\Http\Controllers\Backend\ReviewsController;
use App\Http\Controllers\Backend\TiketController;
use App\Http\Controllers\Backend\TiketDiskonController;
use App\Http\Controllers\Backend\TransaksiController;
use App\Http\Controllers\Frontend\ReviewsController as FrontendReviewsController;
use App\Http\Controllers\Frontend\TransaksiController as FrontendTransaksiController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, "home"])->name('home');
Route::get('/about', [UserController::class, "about"])->name('about');
Route::get('/user/about/tiket/konser/{id}',[UserController::class,"aboutTiketKonser"])->name('user.aboutTiket.konser');

Route::middleware(['guest:admin', 'guest:user'])->group(function() {
    Route::get('/admin/login', [UserLoginController::class, "login"])->name('admin.login');
    Route::post('/admin/submit', [UserLoginController::class, "submit"])->name('admin.UserSubmit');

    Route::get('/user/login', [UserLoginController::class, 'loginUser'])->name('user.login');
    Route::post('/user/submit', [UserLoginController::class, 'submit'])->name('user.submit');
    Route::get('/user/register', [UserLoginController::class, 'register'])->name('user.register');
    Route::post('/user/register', [UserLoginController::class, 'RegisterSubmit'])->name('user.register.submit');
});

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::put('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');

    Route::get('/admin/konser',[KonserController::class,"konser"])->name('konser');
    Route::get('/konser/create',[KonserController::class, "create"])->name('konser_create');
    Route::post('/konser/store',[KonserController::class, "store"])->name('konser_store');
    Route::get('/konser/edit/{id_konser}', [KonserController::class, 'edit'])->name('konser_edit');
    Route::put('/konser/edit/{id_konser}', [KonserController::class, 'update'])->name('konser_update');
    Route::get('/konser/delete/{id_konser}',[KonserController::class, "delete"])->name('konser_delete');

    Route::get('/admin/tiket_kategori',[KategoriTiketController::class, "tiket_kategori"])->name('admin.tiket_kategori');
    Route::get('/tiket_kategori/create',[KategoriTiketController::class, "create"])->name('tiket_kategori_create');
    Route::post('/tiket_kategori/store',[KategoriTiketController::class, "store"])->name('tiket_kategori_store');
    Route::get('/tiket/edit/{id_kategori_tiket}', [KategoriTiketController::class, 'edit'])->name('tiket_kategori_edit');
    Route::put('/tiket/edit/{id_kategori_tiket}', [KategoriTiketController::class, 'update'])->name('tiket_kategori_update');
    Route::get('/tiket/delete/{id_kategori_tiket}',[KategoriTiketController::class, "delete"])->name('tiket_kategorit_delete');

    Route::get('/admin/tiket',[TiketController::class,"tiket"])->name('tiket');
    Route::get('/admin/tiket/create',[TiketController::class, "create"])->name('tiket_create');
    Route::post('/admin/tiket/store',[TiketController::class, "store"])->name('tiket_store');
    Route::get('/admin/tiket/edit/{id_tiket}', [TiketController::class, 'edit'])->name('tiket_edit');
    Route::put('/admin/tiket/edit/{id_tiket}', [TiketController::class, 'update'])->name('tiket_update');
    Route::get('/admin/tiket/delete/{id_tiket}',[TiketController::class, "delete"])->name('tiket_delete');


    Route::get('/admin/diskon',[DiskonController::class,"diskon"])->name('diskon');
    Route::get('/admin/diskon/create',[DiskonController::class,"create"])->name('diskon_create');
    Route::post('/admin/diskon/store',[DiskonController::class,"store"])->name('diskon_store');
    Route::get('/admin/diskon/edit/{id_diskon}', [DiskonController::class, "edit"])->name('diskon_edit');
    Route::put('/admin/diskon/edit{id_diskon}',[DiskonController::class,"update"])->name('diskon_update');
    Route::get('/admin/diskon/delete/{id_diskon}',[DiskonController::class,"delete"])->name('diskon_delete');

    Route::get('/admin/tiket_diskon',[TiketDiskonController::class,"tiket_diskon"])->name('TiketDiskon');

    Route::get('/admin/transaksi',[TransaksiController::class,"transaksi"])->name('transaksi');
    Route::get('/admin/transaksi/cetak/{id}',[TransaksiController::class,"cetak"])->name('cetak');
    Route::get('/admin/transaksi/delete{transaksi}',[TransaksiController::class,"transaksiDelete"])->name('transaksiDelete');

    Route::get('/admin/review',[ReviewsController::class,"review"])->name('review');
    Route::get('/admin/review/delete{review}',[ReviewsController::class,"reviewDelete"])->name('reviewDelete');
});

Route::middleware(['role:user'])->group(function(){
    Route::get('/user/logout',[UserController::class,"logout"])->name('user.logout');
    Route::get('/user/profile',[UserController::class,"profileUser"])->name('user.profile');
    Route::put('/user/profile',[UserController::class,"updateUser"])->name('user.profile.update');

    Route::get('/about/transaksi/konser/{id}/tiket/{id_tiket}',[FrontendTransaksiController::class,"transaksi"])->name('user.transaksi');

    Route::post('/apply-discount', [FrontendTransaksiController::class, 'applyDiscount']);

    Route::post('/user/checkout',[FrontendTransaksiController::class,"process"])->name('user.checkout-process');
    Route::get('/user/checkout/{transaksi}',[FrontendTransaksiController::class,"checkout"])->name('user.checkout');
    Route::get('/user/checkout/success/{transaksi}',[FrontendTransaksiController::class,"success"])->name('user.checkout-success');

    Route::post('/submit-review', [FrontendReviewsController::class, 'submitReview'])->name('user.submitReview');

    Route::get('/user/history', [UserController::class, 'history'])->name('user.history');
    Route::get('/user/history/cetak/{id}', [UserController::class, 'cetak'])->name('user.cetak');
    Route::get('/user/history/delete{transaksi}', [UserController::class, 'deleteHistory'])->name('user.delete');
});
