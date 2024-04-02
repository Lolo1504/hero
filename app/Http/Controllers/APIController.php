<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index()
    {
        $res= [
            "status" => "ok",
            "message" => "La API funciona correctamente"
        ];
        return response()->json($res,200);
    }
}
