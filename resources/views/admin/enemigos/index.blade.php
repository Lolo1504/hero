@extends('layouts.app')

@section('content')
<div class="row"><h1>Lista de enemigos</h1></div>
    
    <div class="row">
        <div class="col-2"><a href="{{route('enemigo.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a></div>
        
    </div>
    <div class="row"><table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Hp</th>
            <th scope="col">Ataque</th>
            <th scope="col">Defensa</th>
            <th scope="col">Recompensa de monedas</th>
            <th scope="col">Recompensa de experiencia</th>
       
        </tr>
        </thead>
        <tbody>
        @foreach ($Enemigos as $Enemy)
              <tr>
            <th scope="row">{{$Enemy->id}}</th>
            <td>{{$Enemy->name}}</td>
            <td>{{$Enemy->hp}}</td>
            <td>{{$Enemy->atq}}</td>
            <td>{{$Enemy->def}}</td>
            <td>{{$Enemy->Rcoins}}</td>
            <td>{{$Enemy->Rxp}}</td>
            <td>
                <div class="row">
                    <div class="col-4">
                         <a href="{{route('enemigo.edit',[$Enemy->id ])}}" class="btn btn-warning ">Modificar</a>
              
                    </div>
                    <div class="col-4">

                              
                              <form action="{{ route('enemigo.destroy',[$Enemy->id ])}}" method="post">
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
   
        
       