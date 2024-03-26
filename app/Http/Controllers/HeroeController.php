<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroeController extends Controller
{

    public function index(){
        return view("admin.heroes.index");
    }
}
