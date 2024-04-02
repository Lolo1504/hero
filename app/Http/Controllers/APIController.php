<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Enemy;
use App\Models\Item;
use App\Http\Controllers\BSController;

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
    public function Heroes()
    {
        $heroes = Hero::all();
        $res =[
            "status" => "ok",
            "message" => "Lista de heroes",
            "data" => $heroes
        ];
        return response()-> json($res,200);
    }
    public function Hero($id)
    {
        $hero = Hero::find($id);
        if(isset($hero)){
        $res =[
            "status" => "ok",
            "message" => "Heroe " . $hero->name,
            "data" => $hero
        ];
        return response()-> json($res,200);

        }
        else
        {
            $res = [
                "status" => "error",
                "message" => "heroe no encontrado"
            ];
            return response()-> json($res,401);
        }
     
    }
    public function Enemigos()
    {
        $enemigos = Enemy::all();

        $res =[
            "status" => "ok",
            "message" => "Lista de enemigos",
            "data" => $enemigos
        ];
        return response()-> json($res,200);
    }
    public function Enemigo($id)
    {
        $enemigos = Enemy::find($id);
        if (isset($enemigos))
        {
            $res =[
                        "status" => "ok",
                        "message" => "Enemigo ". $enemigos ->name,
                        "data" => $enemigos
                    ];
                    return response()-> json($res,200);
        }
        
        else
        {
            $res = [
                "status" => "error",
                "message" => "Enemigo no encontrado" 
            ];
            return response()-> json($res,401);
        }
    }
    public function items()
    {
        $items = item::all();

        $res =[
            "status" => "ok",
            "message" => "Lista de items",
            "data" => $items
        ];
        return response()-> json($res,200);
    }
    public function item($id)
    {
        $items = Item::find($id);
        if (isset($items))
        {
            $res =[
                        "status" => "ok",
                        "message" => "item" . $items->name,
                        "data" => $items
                    ];
                    return response()-> json($res,200);
        }
        
        else
        {
            $res = [
                "status" => "error",
                "message" => "item no encontrado"
            ];
            return response()-> json($res,401);
        }
    }


    public function ManualBS($HId,$EId)
        {
            $bs = BSController::runAutoB($HId,$EId);

            $res=[
                "status" =>"ok",
                "message" =>"Batalla entre ". $bs["Hname"]. " y " . $bs["Ename"],
                "data" =>$bs["eventos"] ,
            ];

            return response()->json($res,200);
            
        }

}
