@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12"> 
		<h1 class="text-center tit" style="font-size: 20px; font-weight:bold; margin-bottom:5%;">Editar Opcion Saludable</h2>
		</div>
		<br>
	</div>
</div>
<div class="container">
    <div class="col-12 text-center">
        @if(isset($opcion))
            <input type="hidden" name="id" value="{{$opcion->id}}">
        @endif
            <div class="col-6 offset-3">
                <form action="{{route('panel.opciones.update',$opcion)}}" method="POST">
                    @csrf 
                    @method('put')
                    <div class="form-group">
                        <label>Ruta Imagen</label>
                        <select name="imagen" class="form-control">
                            <option value ="{{old('imagen',$opcion->imagen)}}">{{old('imagen',$opcion->imagen)}}</option>
                            <option value ="img/cheesecake.jpg">cheesecake</option>
                            <option value ="img/ensaladas.jpg">ensaladas</option>
                            <option value ="img/freezer.jpg">freezer</option>
                            <option value ="img/tiramisu.jpg">tiramisu</option>
                            <option value ="img/tartas.jpg">tartas</option>
                            <option value ="img/ensaladafrutas.jpg">ensalada de frutas</option>
                            <option value ="img/empanadas.jpg">empanadas</option>
                        </select>
                        {{-- <input type="text" name="imagen" id="imagen" class="form-control text-center" value="{{old('imagen',$opcion->imagen)}}"> --}}
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="padding-right:0px;padding-left:0px">
                            <label style="">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control form-control-sm text-center" value="{{isset($opcion->nombre) ? $opcion->nombre : null }}">
                        </div>	
                        <div class="form-group col-md-6">
                            <label for="">Descripcion</label>
                            <textarea type="text" name="descripcion" id="descripcion" class="form-control text-center" style="font-size: 12px;">{{old('descripcion',$opcion->descripcion) }}</textarea>
                            {{-- Mensaje falta descripcion --}}
                            @error('descripcion')
                                <br>
                                <small>*{{$message }}</small>
                                <br>	
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                </form>
            </div>
    </div>
</div>
@endsection

