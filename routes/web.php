<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\KategoriTiketController;
use App\Http\Controllers\Backend\KonserController;
use App\Http\Controllers\Backend\TiketController;
use App\Http\Controllers\User\UserController;
use App\Models\KategoriTiket;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest:admin', 'guest:user'])->group(function() {
    route::get('/admin/login', [UserLoginController::class, "login"])->name('admin.UserLogin');
    route::post('/admin/submit', [UserLoginController::class, "submit"])->name('admin.UserSubmit');
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
    Route::get('/tiket_kategori/create',[KategoriTiketController::class, "create"])->name('tiket_create');
    Route::post('/tiket_kategori/store',[KategoriTiketController::class, "store"])->name('tiket_store');
    Route::get('/tiket/edit/{id_kategori_tiket}', [KategoriTiketController::class, 'edit'])->name('tiket_edit');
    Route::put('/tiket/edit/{id_kategori_tiket}', [KategoriTiketController::class, 'update'])->name('tiket_update');
    Route::get('/tiket/delete/{id_kategori_tiket}',[KategoriTiketController::class, "delete"])->name('tiket_delete');

    Route::get('/admin/tiket',[TiketController::class,"tiket"])->name('tiket');
    Route::get('/admin/tiket/create',[TiketController::class, "create"])->name('tiket_create');
    Route::post('/admin/tiket/store',[TiketController::class, "store"])->name('tiket_store');
    Route::get('/admin/tiket/edit/{}', [TiketController::class, 'edit'])->name('tiket_edit');
    Route::put('/admin/tiket/edit/{}', [TiketController::class, 'update'])->name('tiket_update');
    Route::get('/admin/tiket/delete/{}',[KonserController::class, "delete"])->name('tiket_delete');

});

Route::middleware(['role:user'])->group (function(){
    route::get('/user/dashboard', [UserController::class, "dashboard"])->name('user.dashboard');
});
