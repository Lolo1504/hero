@extends('layouts.app')
@section('content')
<h1>
    Editar  Heroe
</h1>
<form action="{{route('admin.heroes.update',['id'=> $hero ->id])}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="Name" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="Name" name="Name" value = "{{$hero ->name }}" placeholder="Escribe el nombre del heroe">
      </div>
      <div class="mb-3">
        <label for="Hp" class="form-label">Vida </label>
        <input type="number" class="form-control" id="Hp" name="Hp" value = "{{$hero ->hp }}" placeholder="Escribe la vida del heroe">
      </div>
      <div class="mb-3">
        <label for="atq" class="form-label">Ataque </label>
        <input type="number" class="form-control" id="atq" name="atq" value = "{{$hero ->atq }}" placeholder="Escribe el ataque del heroe">
      </div>
      <div class="mb-3">
        <label for="def" class="form-label">Defensa </label>
        <input type="number" class="form-control" id="def" name="def" value = "{{$hero ->def }}" placeholder="Escribe la defensa del heroe">
      </div>
      <div class="mb-3">
        <label for="luck" class="form-label">Suerte </label>
        <input type="number" class="form-control" id="luck" name="luck" value = "{{$hero ->luck }}" placeholder="Escribe la suerte del heroe">
      </div>
      <div class="mb-3">
        <label for="coins" class="form-label">Monedas </label>
        <input type="number" class="form-control" id="coins" name="coins" value = "{{$hero ->coins }}" placeholder="Escribe la cantidad de monedas del heroe">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
      </div>
     
     
       
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
</form>
@endsection