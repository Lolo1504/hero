@extends('layouts.app')
@section('content')
<h1>
    Crear Nuevo Heroe
</h1>
<form action="{{route('heroes.store')}}" method="POST"  enctype="multipart/form-data">
 
  @include('admin.heroes.form')
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Crear</button>
      </div>
     
     
       
    
</form>
@endsection