<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =  Item::all();
        return view("admin.items.index",['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this-> saveItem( $request,null);
            return redirect()-> route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
        {
            $Item = Item::find($id);
            return view('admin.items.edit',['item'=>$Item]);
        
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this-> saveItem( $request,$id );
        return redirect()-> route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Item = Item::find($id);
        $Item -> delete();
        return redirect() -> route('item.index');
    }
    public function saveItem(Request $request,$id)
    {
        if($id)
        {
            $Item = Item::find($id);
        }
        else
        {
            $Item = new Item();
        

        } 
        
        $Item->Name =$request -> input('Name');
        $Item->Hp =$request -> input('Hp');
        $Item->atq =$request -> input('atq');
        $Item->def =$request -> input('def');
        $Item->luck =$request -> input('luck');
        $Item->cost =$request -> input('cost');

         
        if($request->hasFile('img_path'))
        {
            $file = $request->file('img_path');
            $name = time(). "_" . $file->getClientOriginalName();
            $file -> move(public_path(). '/images/items/', $name);

            $Item->img_path = $name;
        }
        
        $Item->save();
    }

}
