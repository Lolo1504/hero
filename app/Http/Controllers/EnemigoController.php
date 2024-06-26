<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Enemy;
class EnemigoController extends Controller
{

    public function index()
        {
            $Enemigos =  Enemy::all();
            return view("admin.enemigos.index",['Enemigos'=>$Enemigos]);
        }
    public function create()
        {
            return view ('admin.enemigos.create');
        }

    public function Store(Request $request)
        {
            $this-> saveEnemy( $request,null);
            return redirect()-> route('enemigo.index');
        }

    public function edit($id)
        {
            $Enemy = Enemy::find($id);
            return view('admin.enemigos.edit',['Enemy'=>$Enemy]);
        
        }

    public function update(Request $request,$id)
        {
            
            $this-> saveEnemy( $request,$id );
            return redirect()-> route('enemigo.index');
        }

    public function saveEnemy(Request $request,$id)
        {
            if($id)
            {
                $Enemy = Enemy::find($id);
            }
            else
            {
                $Enemy = new Enemy();
            } 
            
            $Enemy->Name =$request -> input('Name');
            $Enemy->Hp =$request -> input('Hp');
            $Enemy->atq =$request -> input('atq');
            $Enemy->def =$request -> input('def');
            $Enemy->Rcoins =$request -> input('Rcoins');
            $Enemy->Rxp = $request -> input('Rxp') ;

            if($request->hasFile('img_path'))
            {
                $file = $request->file('img_path');
                $name = time(). "_" . $file->getClientOriginalName();
                $file -> move(public_path(). '/images/enemigos/', $name);

                $Enemy->img_path = $name;
            }
            $Enemy->save();
        }
    public function destroy($id)
        {
            $Enemy = Enemy::find($id);
            $filePath = public_path() . '/images/enemigos/' . $Enemy->img_path;
            File::delete($filePath);
            
            $Enemy -> delete();
            return redirect() -> route('enemigo.index');
        }
}
