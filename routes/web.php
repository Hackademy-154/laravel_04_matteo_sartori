<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/contactUs', [PublicController::class, 'contactUs'])->name('contact');

Route::post('/contactUs-submit', [PublicController::class, 'contactUsSubmit'])->name('contactUs.submit');
Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou');