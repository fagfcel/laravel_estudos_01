<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\EndMiddleware;
use App\Http\Middleware\StarMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MainController::class, 'index'])->name('index');
// Route::get('/about', [MainController::class, 'about'])->name('about');
// Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Route::get('/', [MainController::class, 'index'])->name('index')->middleware([StarMiddleware::class]);  
// Route::get('/about', [MainController::class, 'about'])->name('about')->middleware([StarMiddleware::class, EndMiddleware::class]);
// Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::middleware([StarMiddleware::class, EndMiddleware::class])->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('/about', [MainController::class, 'about'])->name('about')->withoutMiddleware([EndMiddleware::class]);
    Route::get('/contact', [MainController::class, 'contact'])->name('contact');

});