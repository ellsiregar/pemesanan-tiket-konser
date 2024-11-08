<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('backend.admin.layouts.app');
});