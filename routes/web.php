<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\DiskonController;
use App\Http\Controllers\Backend\KategoriTiketController;
use App\Http\Controllers\Backend\KonserController;
use App\Http\Controllers\Backend\ReviewsController;
use App\Http\Controllers\Backend\SeatAllocationsController;
use App\Http\Controllers\Backend\TiketController;
use App\Http\Controllers\Backend\TiketDiskonController;
use App\Http\Controllers\Backend\TransaksiController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;
use App\Http\Controllers\User\UserController;
use App\Models\KategoriTiket;
use App\Models\SeatAllocations;
use App\Models\TiketDiskon;
use Illuminate\Support\Facades\Route;

Route::get('#', function () {
    return view('welcome');
});

Route::middleware(['guest:admin', 'guest:user'])->group(function() {
    route::get('/admin/login', [UserLoginController::class, "login"])->name('admin.login');
    route::post('/admin/submit', [UserLoginController::class, "submit"])->name('admin.UserSubmit');


    Route::get('/', [UserLoginController::class, 'loginUser'])->name('user.login');
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

    Route::get('/admin/tiket/{id_tiket}/seat',[SeatAllocationsController::class,"seat"])->name('seat');
    Route::get('/admin/tiket/{id_tiket}/seat/create',[SeatAllocationsController::class,"create"])->name('seat_create');
    Route::post('/admin/tiket/{id_tiket}/seat/store',[SeatAllocationsController::class,"store"])->name('seat_store');
    Route::get('/admin/tiket/{id_tiket}/seat/edit/{id_lokasi}', [SeatAllocationsController::class, "edit"])->name('seat_edit');
    Route::put('/admin/tiket/{id_tiket}/seat/edit{id_lokasi}',[SeatAllocationsController::class,"update"])->name('seat_update');
    Route::get('/admin/tiket/{id_tiket}/seat/delete/{id_lokasi}',[SeatAllocationsController::class,"delete"])->name('seat_delete');

    Route::get('/admin/diskon',[DiskonController::class,"diskon"])->name('diskon');
    Route::get('/admin/diskon/create',[DiskonController::class,"create"])->name('diskon_create');
    Route::post('/admin/diskon/store',[DiskonController::class,"store"])->name('diskon_store');
    Route::get('/admin/diskon/edit/{id_diskon}', [DiskonController::class, "edit"])->name('diskon_edit');
    Route::put('/admin/diskon/edit{id_diskon}',[DiskonController::class,"update"])->name('diskon_update');
    Route::get('/admin/diskon/delete/{id_diskon}',[DiskonController::class,"delete"])->name('diskon_delete');

    Route::get('/admin/tiket_diskon',[TiketDiskonController::class,"tiket_diskon"])->name('TiketDiskon');

    Route::get('/admin/transaksi',[TransaksiController::class,"transaksi"])->name('transaksi');

    Route::get('/admin/review',[ReviewsController::class,"review"])->name('review');

});

Route::middleware(['role:user'])->group (function(){
    Route::get('/user/dashboard',[FrontendUserController::class,"dashboard"])->name('user.dashboard');
});
