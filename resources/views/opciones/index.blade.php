@extends('layouts.plantilla')
@section('title','Opciones Saludables')
@section('contenido')

<div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mt-5 text-uppercase">
          🥧  Opciones Saludables 🍰
        </h2>
        <br>
        <h4 class="text-center" style="color:#69357f;">Ademas de nuestro menu, contamos con diferentes opciones saludables!</h4>
        <br>
      </div>    
      <div class="container mt-5">
        <div class="row">
        @foreach ($opcion as $opc)
        <div class="card border-radius-50 col-6 col-lg-3 col-sm-4 mb-4 bg-transparent" style="padding-right:0%;padding-left:0%;">
          <img class="card-img-top img-fluid" src="{{asset($opc->imagen) }}" alt="{{$opc->nombre}}">
          <div class="card-body">
            <h3 class="card-title">{{$opc->nombre}}</h3>
            <p class="card-text">{{$opc->descripcion}}</p>
          </div>
        </div>
      @endforeach
      </div>
      </div>
    </div>
  </div>    
@endsection
