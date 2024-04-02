<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Hero;
class HeroeController extends Controller
{

    public function index()
        {
            $heroes =  Hero::all();
            return view("admin.heroes.index",['heroes'=>$heroes]);
        }
    public function create()
        {
            return view ('admin.heroes.create');
        }

    public function Store(Request $request)
        {
            $this-> saveHero( $request,null);
            return redirect()-> route('heroes.index');
        }

    public function edit($id)
        {
            $hero = Hero::find($id);
            return view('admin.heroes.edit',['hero'=>$hero]);
        
        }

    public function update(Request $request,$id)
        {
            
            $this-> saveHero( $request,$id );
            return redirect()-> route('heroes.index');
        }

    public function saveHero(Request $request,$id)
        {
            if($id)
            {
                $hero = Hero::find($id);
            }
            else
            {
                $hero = new Hero();
            
                $hero->xp =0;
                $hero->level_id=1;

            } 
            
            $hero->Name =$request -> input('Name');
            $hero->Hp =$request -> input('Hp');
            $hero->atq =$request -> input('atq');
            $hero->def =$request -> input('def');
            $hero->luck =$request -> input('luck');
            $hero->coins =$request -> input('coins');
            
            if($request->hasFile('img_path'))
            {
                $file = $request->file('img_path');
                $name = time(). "_" . $file->getClientOriginalName();
                $file -> move(public_path(). '/images/heroes', $name);

                $hero->img_path = $name;
            }
            
            $hero->save();
        }
    public function destroy($id)
        {
            $hero = Hero::find($id);
            $filePath = public_path() . '/images/heroes/' . $hero->img_path;
            File::delete($filePath);
            $hero -> delete();
            return redirect() -> route('heroes.index');
        }
}
