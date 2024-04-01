@extends('layouts.app')
@section('content')
<h1>
    Crear Nuevo item
</h1>
<form action="{{route('item.store')}}" method="POST">
  
  @include('admin.items.form')
  
  <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Crear</button>
      </div>
     
     
       
        
    
</form>
@endsection