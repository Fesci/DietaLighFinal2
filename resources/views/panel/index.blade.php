@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')

<div class="container">
    <div class="row">
          <div class="col-12">
            <h2 class="text-center tit">
              PANEL MENU DIETA LIGHT
            </h2>
            <a class="btn btn-primary btn-xl text-uppercase mb-3" href="{{route('panel.menu.create')}}">Agregar Menu</a> 
          </div>         
      <div class="col-12">
        <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class="text-center">Dia</th>
              <th scope="col" class="text-center">Almuerzo</th>
              <th scope="col" class="text-center">Cena</th>
              <th scope="col" class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($menu as $m)
            <tr>
              <th scope="row" class="text-center">{{date("d/m/Y", strtotime($m->dianumero));}}<br>{{ $m->dianombre}}</th>
                <td class="text-center">{{ $m->almuerzo}}<br>{{ $m->acompalmuerzo}}</td>
                <td class="text-center">{{ $m->cena}}<br>{{ $m->acompcena}}</td>
                <td class="text-center">
                <form action="{{route("panel.menu.destroy", $m)}}" method="POST">
                 @method('delete')
                 @csrf
                  <div class="btn-group">
                    <a href="{{route("panel.menu.edit", $m)}}" class="btn btn-success btn-sm">Editar</a>
                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                  </div>
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