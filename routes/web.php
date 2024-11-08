<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
route::middleware(['guest:admin', 'guest:user'])->group(function() {
    route::get('/admin/login', [UserLoginController::class, "login"])->name('admin.UserLogin');
    route::post('/admin/submit', [UserLoginController::class, "submit"])->name('admin.UserSubmit');
});



Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['role:user'])->group (function(){
    route::get('/user/dashboard', [UserController::class, "dashboard"])->name('user.dashboard');
});
=======
Route::get('/layouts', function () {
    return view('backend.admin.layouts.app');
});
>>>>>>> origin/main
