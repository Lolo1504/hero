<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnemigoController;
use App\Http\Controllers\HeroeController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: group(['prefix' => 'admin'],function(){

Route::get('/', [AdminController::class,'index'])-> name("admin");
Route::get('heroes', [HeroeController::class,'index']) ->name("admin.heroes");
Route::get('enemigos', [EnemigoController::class,'index'])-> name("admin.enemigos");
Route::get('items', [ItemController::class,'index'])->name("admin.items");
});
