<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "home"])->name('home');

Route::get("/profile", [PageController::class, "profile"])->name('profile');

Route::get("/blog", [BlogController::class, "blog"])->name('blog');

Route::get("/blog/{slug}", [BlogController::class, "single"])->name('single');

Route::get("/dashboard", [DashboardController::class, "dashboard"])->name('faq');

Route::get("/faq", [FaqController::class, "faq"])->name('faq');

