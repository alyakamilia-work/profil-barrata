<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Pastikan Anda sudah membuat PageController dengan perintah:
// php artisan make:controller PageController

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContactMessage'])->name('contact.send');