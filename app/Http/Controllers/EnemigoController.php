<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnemigoController extends Controller
{
    public function index(){
        return view("admin.enemigos.index");
    }
}
