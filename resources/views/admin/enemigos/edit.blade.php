@extends('layouts.app')
@section('content')
<h1>
    Editar  Enemigo - {{ $Enemy ->name}}
</h1>
<form action="{{route('enemigo.update',$Enemy ->id)}}" method="post"  enctype="multipart/form-data">
    @method('PUT')
    @include('admin.enemigos.form')
    
      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Editar</button>
      </div>    
</form>
@endsection