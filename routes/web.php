<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/',[HomeController::class,'index'])->name('homepage');

// Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin.homepage');
