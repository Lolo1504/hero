@extends('layouts.app')

@section('content')
 
  
<div class="row"><h1>Lista de items</h1></div>
    
    <div class="row">
        <div class="col-2"><a href="{{route('item.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a></div>
        
    </div>
    <div class="row"><table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Hp</th>
            <th scope="col">Ataque</th>
            <th scope="col">Defensa</th>
            <th scope="col">Suerte</th>
            <th scope="col">Coste</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
              <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->hp}}</td>
            <td>{{$item->atq}}</td>
            <td>{{$item->def}}</td>
            <td>{{$item->luck}}</td>
            <td>{{$item->cost}}</td>
      
            <td>
                <div class="row">
                    <div class="col-4">
                         <a href="{{route('item.edit',[$item->id ])}}" class="btn btn-warning ">Modificar</a>
              
                    </div>
                    <div class="col-4">

                              
                              <form action="{{ route('item.destroy',[$item->id ])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                  <button type="submit" id="borrar" class="btn btn-danger">Borrar</button>
                              </form>
                            </div>
                          </div>
                             
            </td>    
          </tr>
        @endforeach           
        
        </tbody>
      </table></div>
    

   
        
       
@endsection