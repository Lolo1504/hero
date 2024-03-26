<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnemigoController;
use App\Http\Controllers\HeroeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class,'index'])-> name("admin");
Route::get('/admin/heroes', [HeroeController::class,'index']) ->name("admin.heroes");
Route::get('/admin/enemigos', [EnemigoController::class,'index'])-> name("admin.enemigos");
Route::get('/admin/items', [ItemController::class,'index'])->name("admin.items");

