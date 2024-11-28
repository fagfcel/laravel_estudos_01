<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class, 'initMethod'])->name('init');
Route::get('/view', [MainController::class, 'viewPage'])->name('view');

//Route para controller Single Action
Route::get('/single', SingleActionController::class)->name('single');

//rota para controller do tipo resource
// Route::resource('/user', UserController::class);
// Route::resource('/client', ClientsController::class);
// Route::resource('/product', ProductsController::class);

Route::resources([
    'user' => UserController::class,
    'client' => ClientsController::class ,
    'product' => ProductsController::class
]);