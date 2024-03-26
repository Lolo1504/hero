<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/home/{name}', function($name)
{
    return view ('home',['name'=> $name]);
    #return "Esto es el home con nombre " . "$name";
})->where ('name', '[A-Za-z0-9]+');