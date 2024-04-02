@extends('layouts.app')
@section('content')
<h1>
    Crear Nuevo Enemigo
</h1>
<form action="{{route('enemigo.store')}}" method="POST" enctype="multipart/form-data">
      @include('admin.enemigos.form')
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Crear</button>
      </div>    
</form>
@endsection