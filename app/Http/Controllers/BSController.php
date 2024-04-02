<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Enemy;
class BSController extends Controller
{
  
    public function index(){
        return view('admin.bs.index', $this->runAutoB(3,1)
        ); 
    }

    public function runAutoB($heroId,$enemyId){
        $hero = Hero::find($heroId);
        $enemy = Enemy::find($enemyId);
        $heroV = $hero->hp;
    
        $eventos = [];
        while($hero->hp > 0 && $enemy->hp  > 0)
        {
            $luck = random_int(0,100);
            if($luck <= $hero->luck )
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
                    $hero->hp = $heroV;
                    $ev =[
                        "Winner" => "hero",
                        "text" => $hero->name . " acabo con la vida de "  . $enemy->name . " y gano " . $enemy->Rxp . " de experiencia"
                    ]; 
                    $hero->xp = $hero->xp + $enemy->Rxp;
                    if($hero->xp >= $hero->level->xp)
                    {
                        $hero->xp=0;
                        $hero->level_id += 1 ;
                    }
                       $hero->save(); 
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
        return ["eventos" => $eventos, 
        "Ename" => $enemy->name,
        "Hname" => $hero->name,
        "heroAvatar" => $hero->img_path,
        "enemyAvatar" => $enemy->img_path
    ];

    }

    public function RunManualB($heroId,$enemyId){
        $hero = Hero::find($heroId)->first();
        $enemy = Enemy::find($enemyId)->first();
        $heroV = $hero->hp;

        $luck = random_int(0,100);
        if($luck  >= $hero->luck )
        {
            $hp = $enemy->def - $hero->atq;
            if ($hp < 0)
            {
                $hpE = $hp*-1;
                $enemy ->hp -= $hp*-1;
            }
            if($enemy->hp >0)
            {
                return [
                    "Winner" => "hero",
                    "text" => $hero->name . " hizo " . $hpE ." de daño a " . $enemy->name
                ];
               
            }
            else
            {
                $hero->hp = $heroV;
                return [
                    "Winner" => "hero",
                    "text" => $hero->name . " acabo con la vida de "  . $enemy->name . " y gano " . $enemy->Rxp . " de experiencia"
                ]; 
                $hero->xp = $hero->xp + $enemy->Rxp;
                if($hero->xp >= $hero->level->xp)
                {
                    $hero->xp=0;
                    $hero->level_id += 1 ;
                }
                   $hero->save(); 
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
                        return [
                            "Winner" => "Enemy",
                            "text" => $hero->name . " recibio  " . $hpA ." de daño de " . $enemy->name
                        ];
                    }
                    else
                    {
                        return [
                            "Winner" => "Enemy",
                            "text" => $hero->name . " fue asesinado por "  . $enemy->name
                        ];
                    }
                }

    }
}
