@extends('layouts.plantilla')

@section('title','Contacto')

@section('contenido')

<div class="container">
  <div class="text-center">
    <h2 class="mt-5">📧Contacto📧</h2>
    <h5>Todos nuestros productos son avalados por una excelente nutricionista.
      Contáctenos para planificar su alimentacion. </h5>
    </div>
 
  
    <form class="mt-5"action="{{route('contacto.store')}}" method="POST">
    @csrf
      <div class="form-row align-items-stretch mb-5 ml-10 mr-10">
      <div class="col-md-6 col-lg-6">
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese nombre">
            @error('nombre')
            <p><strong>{{$message}}</strong></p>
             @enderror
        </div>
        <div class="form-group mb-md-0">
          <label for="">E-mail</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese e-mail">
            @error('email')
              <p><strong>{{$message}}</strong></p>
            @enderror
        </div>
      </div>
        <div class="col-md-6 col-lg-6">
          <div class="form-group form-group-textarea">
          <label for="">Consulta:</label>
          <textarea class="form-control" name="consulta" placeholder="Ingrese aqui su consulta..." style="height: 130px;"></textarea>
            @error('consulta')
              <p><strong>{{$message}}</strong></p>
            @enderror
          </div> 
        </div>
      </div>
     <div class="text-center"><button type="submit" class="btn btn-primary btn-xl text-uppercase">Enviar</button></div> 
    </form>
@if (session('exito'))
  <script>
    alert("{{ session('exito')}}");
  </script>
@endif
</div>

@endsection
