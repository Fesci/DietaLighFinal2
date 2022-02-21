@extends('layouts.panel.layout')
@section('title','OpcionesSaludables')
@section('contenido')

<div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5 mb-3">
          PANEL Opciones Saludables
        </h1>
        <a class="btn btn-primary btn-xl text-uppercase mb-3" href="{{route('panel.opciones.create')}}">Agregar Opcion</a>
      </div>    

      <div class="col-12">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class="text-center">Titulo</th>
              <th scope="col" class="text-center">Descripcion</th>
              <th scope="col" class="text-center">Imagen</th>
              <th scope="col" class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($opcion as $opc)
            <tr>
              <th scope="row" class="text-center">{{$opc->nombre}}</th>
                <td class="text-center">{{$opc->descripcion}}</td>
                <td class="text-center"><img src="{{$opc->imagen}}" width="50"></td>
                {{-- {{route("panel.opciones.destroy", $opc)}}
                {{route("panel.opciones.edit", $m)}} --}}
                <td class="text-center">
                  <form action="{{route("panel.opciones.destroy", $opc)}}" method="post">
                    @method('delete')
                    @csrf
                    <div class="btn-group">
                      <a href="{{route("panel.opciones.edit", $opc)}}" class="btn btn-success btn-sm">Editar</a>
                      <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </div>
                      {{-- <input type="hidden" value="" name="id"> --}}
                  </form>
                </td>
            </tr>
            @endforeach
          </tbody>

        </table>

        </div>
    </div>
  </div>    
@endsection
