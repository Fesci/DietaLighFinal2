@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12"> 
		<h1 class="text-center tit" style="font-size: 20px; font-weight:bold; margin-bottom:5%;">Crear Opcion Saludable</h2>
		</div>
		<br>
	</div>
</div>
<div class="container">
	<div class="col-12 text-center">
        @if(isset($menu)):
    	<input type="hidden" name="id" value="{{$menu->id}}">
    	@endif
        <div class="col-6 offset-3">
			<form action="{{route('panel.opciones.store')}}" method="POST">
				@csrf 
				<div class="form-group">
					<label>Ruta Imagen</label>
					<input type="text" name="imagen" id="imagen" class="form-control text-center" placeholder=" ej: /img/NOMBRE.jpg "value="{{isset($opciom->imagen) ? $opcion->imagen : null}}">
					{{-- Mensaje falta descripcion --}}
					@error('imagen')
					<br>
					<small>*{{$message }}</small>
					<br>	
				@enderror
				</div>
				<div class="form-row">
					<div class="form-group col-md-6" style="padding-right:0px;padding-left:0px">
						<label style="">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control form-control-sm text-center" value="{{isset($opcion->nombre) ? $opcion->nombre : null }}">
					</div>	
					<div class="form-group col-md-6">
						<label for="">Descripcion</label>
						<textarea type="text" name="descripcion" id="descripcion" class="form-control text-center" style="font-size: 12px;">{{old('descripcion') }}</textarea>
						{{-- Mensaje falta descripcion --}}
						@error('descripcion')
							<br>
							<small>*{{$message }}</small>
							<br>	
						@enderror
					</div>
				</div>
				<button type="submit" class="btn btn-success btn-lg">Crear</button>
			</form>
		</div>
	</div>

</div>

@endsection

