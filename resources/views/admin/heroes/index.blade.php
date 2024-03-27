@extends('layouts.app')

@section('content')
<div class="row"><h1>Lista de heroes</h1></div>
    
    <div class="row">
        <div class="col-2"><a href="{{route('admin.heroes.create')}}" class="btn btn-primary mb-2 mt-2">Crear</a></div>
        
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
            <th scope="col">Monedas</th>
            <th scope="col">Experiencia</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($heroes as $hero)
              <tr>
            <th scope="row">{{$hero->id}}</th>
            <td>{{$hero->name}}</td>
            <td>{{$hero->hp}}</td>
            <td>{{$hero->atq}}</td>
            <td>{{$hero->def}}</td>
            <td>{{$hero->luck}}</td>
            <td>{{$hero->coins}}</td>
            <td>{{$hero->xp}}</td>
            <td>
                <div class="row">
                    <div class="col-4">
                         <a href="{{route('admin.heroes.edit',['id' =>$hero->id ])}}" class="btn btn-warning ">Modificar</a>
              
                    </div>
                    <div class="col-4">
                          <form action="{{ route('admin.heroes.destroy',['id' =>$hero->id ])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <button type="button" class="btn btn-danger">Borrar</button>
                                <div class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Modal title</h5>
                                          <button type="button" class="btn-close" id="abrir" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" id="borrar" class="btn btn-danger">Borrar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </form>
                    </div>
                </div>
               
            </td>    
          </tr>
        @endforeach           
        
        </tbody>
      </table></div>
    
@endsection
      <script>
const myModal = document.getElementById('abrir')
const myInput = document.getElementById('borrar')

myModal.addEventListener('shown.bs.modal', ('abrir') => {
  myInput.focus('borrar')
})
        </script>