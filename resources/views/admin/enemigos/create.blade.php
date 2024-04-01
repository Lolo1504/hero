@extends('layouts.app')
@section('content')
<h1>
    Crear Nuevo Enemigo
</h1>
<form action="{{route('enemigo.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="Name" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="Name" name="Name" placeholder="Escribe el nombre del heroe">
      </div>
      <div class="mb-3">
        <label for="Hp" class="form-label">Vida </label>
        <input type="number" class="form-control" id="Hp" name="Hp" placeholder="Escribe la vida del heroe">
      </div>
      <div class="mb-3">
        <label for="atq" class="form-label">Ataque </label>
        <input type="number" class="form-control" id="atq" name="atq" placeholder="Escribe el ataque del heroe">
      </div>
      <div class="mb-3">
        <label for="def" class="form-label">Defensa </label>
        <input type="number" class="form-control" id="def" name="def" placeholder="Escribe la defensa del heroe">
      </div>
      <div class="mb-3">
        <label for="Rxp" class="form-label">Recompensa de experiencia  </label>
        <input type="number" class="form-control" id="Rxp" name="Rxp"  placeholder="Escribe la suerte del heroe">
      </div>
      <div class="mb-3">
        <label for="Rcoins" class="form-label">Recompensa de monedas </label>
        <input type="number" class="form-control" id="Rcoins" name="Rcoins"  placeholder="Escribe la cantidad de monedas del heroe">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Crear</button>
      </div>
     
     
       
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    
</form>
@endsection