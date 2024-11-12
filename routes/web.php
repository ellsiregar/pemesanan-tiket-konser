<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Backend\KonserController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('welcome');
});

route::middleware(['guest:admin', 'guest:user'])->group(function() {
    route::get('/admin/login', [UserLoginController::class, "login"])->name('admin.UserLogin');
    route::post('/admin/submit', [UserLoginController::class, "submit"])->name('admin.UserSubmit');
});



Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/konser/create',[KonserController::class, "create"])->name('konser_create');
    Route::post('/konser/store',[KonserController::class, "store"])->name('konser_store');
    Route::get('/konser/edit/{id_konser}', [KonserController::class, 'edit'])->name('konser_edit');
    Route::put('/konser/edit/{id_konser}', [KonserController::class, 'update'])->name('konser_update');
    Route::get('/konser/delete/{id_konser}',[KonserController::class, "delete"])->name('konser_delete');
});

Route::middleware(['role:user'])->group (function(){
    route::get('/user/dashboard', [UserController::class, "dashboard"])->name('user.dashboard');
});
