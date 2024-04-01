@extends('layouts.app')


@section('content')
    <div class="row text-center">
        <h1>Sistema de batalla</h1>
    </div>

    <div class="row text-center text-white mt-2">
        <div class="col-5 bg-primary">
            <h2>{{$Hname}}</h2>
            
        </div>
        <div class="col bg-warning ">
            <h2>VS</h2>
        </div>
        <div class="col-5 bg-danger">
            <h2>{{$Ename}}</h2>
        </div>
    </div>

    <div class="row text-center text-white mt-2 bg-info">
        <h2>Eventos de batalla</h2>
    </div>
    <div class="mt-3">
        @foreach ($eventos as $evento)
        
            @if ($evento["Winner"] == "hero")
                 <div class="alert alert-success">
                    {{$evento ["text"]}}
                </div>
            
            @else
            <div class="alert alert-danger">
                {{$evento ["text"]}}
            </div>
             @endif   
            
        @endforeach
       
      
    </div>
@endsection