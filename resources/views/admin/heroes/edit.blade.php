@extends('layouts.app')
@section('content')
<h1>
    Editar  Heroe - {{ $hero->name}}
</h1>
<form action="{{route('heroes.update',$hero ->id)}}" method="post">
   
    @method('PUT')

    @include('admin.heroes.form')

      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
      </div>
     
     
       
    
</form>
@endsection