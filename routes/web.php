<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name('home');
Route::post('contact-us', [ContactUsController::class, "store"])->name('contact-us.store');
