@extends('layouts.app')
@section('content')
<h1>
    Editar  Item - {{$item ->name}}
</h1>
<form action="{{route('item.update',$item ->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="Name" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="Name" name="Name" value = "{{$item ->name }}" placeholder="Escribe el nombre del heroe">
      </div>
      <div class="mb-3">
        <label for="Hp" class="form-label">Vida </label>
        <input type="number" class="form-control" id="Hp" name="Hp" value = "{{$item ->hp }}" placeholder="Escribe la vida del heroe">
      </div>
      <div class="mb-3">
        <label for="atq" class="form-label">Ataque </label>
        <input type="number" class="form-control" id="atq" name="atq" value = "{{$item ->atq }}" placeholder="Escribe el ataque del heroe">
      </div>
      <div class="mb-3">
        <label for="def" class="form-label">Defensa </label>
        <input type="number" class="form-control" id="def" name="def" value = "{{$item ->def }}" placeholder="Escribe la defensa del heroe">
      </div>
      <div class="mb-3">
        <label for="luck" class="form-label">Suerte </label>
        <input type="number" class="form-control" id="luck" name="luck" value = "{{$item ->luck }}" placeholder="Escribe la suerte del heroe">
      </div>
      <div class="mb-3">
        <label for="cost" class="form-label">Coste </label>
        <input type="number" class="form-control" id="cost" name="cost" value = "{{$item ->cost }}" placeholder="Escribe la cantidad de monedas del heroe">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
      </div>
     
     
       
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
</form>
@endsection