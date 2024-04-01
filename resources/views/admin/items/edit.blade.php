@extends('layouts.app')
@section('content')
<h1>
    Editar  Item - {{$item ->name}}
</h1>
<form action="{{route('item.update',$item ->id)}}" method="post">
  
    @method('PUT')
    @include('admin.items.form')
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
      </div>
     
     
       
    
</form>
@endsection