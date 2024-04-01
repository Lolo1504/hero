<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enemy;
use App\Models\Hero;
use App\Models\Item;
class AdminController extends Controller
{
    public function index(){
        $heroCounter = Hero::count();
        $itemCounter = Item::count();
        $enemyCounter = Enemy::count();

        $list = [['name' =>"Heroes", 'counter' => $heroCounter, 'route' => 'heroes.index', 'class'=> "btn btn-primary"],
                 ['name' =>"Items", 'counter' => $itemCounter, 'route' => 'item.index', 'class' => "btn btn-warning"],
                 ['name' =>"Enemigos", 'counter' => $enemyCounter, 'route' => 'enemigo.index', 'class' => "btn btn-danger"],
                
                ];
        return view('admin.index',['list' => $list]);
    }
}
