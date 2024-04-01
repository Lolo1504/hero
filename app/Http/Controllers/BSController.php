<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Enemy;
class BSController extends Controller
{
    public function index(){
        $hero = Hero::find(1)->first();
        $enemy = Enemy::find(1)->first();
    
        $eventos = [];

        while($hero->hp > 0 && $enemy->hp  > 0)
        {
            $luck = random_int(0,100);
            if($luck >= 50 )
            {
                $hp = $enemy->def - $hero->atq;
                if ($hp < 0)
                {
                    $hpE = $hp*-1;
                    $enemy ->hp -= $hp*-1;
                }
                if($enemy->hp >0)
                {
                    $ev =[
                        "Winner" => "hero",
                        "text" => $hero->name . " hizo " . $hpE ." de daño a " . $enemy->name
                    ];
                }
                else
                {
                    $ev =[
                        "Winner" => "hero",
                        "text" => $hero->name . " acabo con la vida de "  . $enemy->name
                    ];
                }
                
            }
            else
            {
                $hp = $hero->def - $enemy->atq;
                if($hp<0)
                {
                    $hpA = $hp*-1;
                    $hero->hp -= $hp*-1;
                }
            
                if($hero->hp >0)
                {
                    $ev =[
                        "Winner" => "Enemy",
                        "text" => $hero->name . " recibio  " . $hpA ." de daño de " . $enemy->name
                    ];
                }
                else
                {
                    $ev =[
                        "Winner" => "Enemy",
                        "text" => $hero->name . " fue asesinado por "  . $enemy->name
                    ];
                }
            }

            array_push($eventos,$ev);    
        }
       
        return view('admin.bs.index',
        ["eventos" => $eventos, 
        "Ename" => $enemy->name,
        "Hname" => $hero->name],
       
        ); 
    }
    
}
