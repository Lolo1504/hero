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
Route :: resource('heroes',HeroeController::class );

Route::resource('enemigo', EnemigoController::class);
Route::resource('item', ItemController::class);

});
















/*
Route:: group(['prefix' => 'heroes'],function(){
    Route::get('/', [HeroeController::class,'index']) ->name("admin.heroes");
    Route::get('create', [HeroeController::class,'create']) ->name("admin.heroes.create");
    Route::post('store', [HeroeController::class,'store']) ->name("admin.heroes.store");
    Route::get('edit/{id}', [HeroeController::class,'edit']) ->name("admin.heroes.edit");
    Route::post('update/{id}',[HeroeController::class,'update'])->name("admin.heroes.update");
    Route::delete('destroy/{id}',[HeroeController::class,'destroy'])-> name('admin.heroes.destroy');
});
*/