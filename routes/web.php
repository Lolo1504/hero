<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnemigoController;
use App\Http\Controllers\HeroeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;


Route::get('/', function () {
    return view('welcome');
});

Route:: group(['prefix' => 'admin'],function(){

Route::get('/', [AdminController::class,'index'])-> name("admin");
Route :: resource('heroes',HeroeController::class );

Route::resource('enemigo', EnemigoController::class);
Route::resource('item', ItemController::class);
Route::resource('bs',BSController::class );
Route::get('bs',[BSController::class,'index']) -> name("admin.bs");

});
Route::group(['prefix' => 'api'],function(){
    Route::get('/',[APIController::class,'index'])-> name("api");

    #Hero
    Route::get('heroes',[APIController::class,'heroes']);
    Route::get('heroes/{id}',[APIController::class,'hero']);

    #Enemigo
    Route::get('enemigos',[APIController::class,'enemigos']);
    Route::get('enemigos/{id}',[APIController::class,'enemigo']);

    #Item
    Route::get('items',[APIController::class,'items']);
    Route::get('items/{id}',[APIController::class,'item']);

    #BS
    Route::get('bs/{HId}/{EId}',[APIController::class,'ManualBS']);
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