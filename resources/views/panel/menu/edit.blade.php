@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12">
		<h2 class="text-center tit" style="font-size: 20px; font-weight:bold; margin-bottom:5%;">Editar dia de menu semanal</h2>
		</div>
	</div>
</div>
<div class="container">
		<div class="col-12 text-center">
            @if(isset($menu))
        		<input type="hidden" name="id" value="{{$menu->id}}">
            @endif
                <div class="col-6 offset-3">
                	<form action="{{route('panel.menu.update',$menu)}}" method="POST">
						@csrf 
                        @method('put')
						<div class="form-row">
							<div class="form-group col-md-2" style="padding-right:0px;padding-left:0px">
								<label style="font-size: 12px;">ID(1:Lunes)</label>
								<input type="text" name="id" id="id" class="form-control form-control-sm text-center" value="{{isset($menu->id) ? $menu->id : null }}" style="font-size: 12px;">
							</div>	
							<div class="form-group col-md-4">
								<label>Dia</label>
							{{-- <input type="text" name="dianombre" id="dianombre" class="form-control text-center" placeholder="Nombre dia" value="{{old('dianombre',$menu->dianombre)}}"> --}}
								<select name="dianombre" class="form-control" id="dianombre" value="{{old('dianombre',$menu->dianombre)}}">
									<option value ="Lunes">Lunes</option>
									<option value ="Martes">Martes</option>
									<option value ="Miercoles">Miercoles</option>
									<option value ="Jueves">Jueves</option>
									<option value ="Viernes">Viernes</option>
									<option value ="Sabado">Sabado</option>
								</select>
								{{-- Mensaje falta nombre dia --}}
								@error('dianombre')
									<br>
									<small>*{{$message }}</small>
									<br>	
								@enderror
							
							</div>
							<div class="form-group col-md-6">
								<label for="">Fecha</label>
								<input type="date" name="dianumero" id="dianumero" class="form-control text-center" style="font-size: 14px; padding-right:6px;padding-left:6px" value="{{old('dianumero',$menu->dianumero) }}">
								{{-- Mensaje falta numero dia --}}
								@error('dianumero')
									<br>
									<small>*{{$message }}</small>
									<br>	
								@enderror
							</div>
						</div>
                		<div class="form-group">
                			<label>Almuerzo</label>
                			<textarea type="text" name="almuerzo" id="almuerzo" class="form-control text-center">{{old('almuerzo', $menu->almuerzo)}}</textarea>
                        <div class="form-group">
                                <label>Acompañamiento de Almuerzo</label><br>
                                <textarea type="text" name="acompalmuerzo" id="acompalmuerzo" class="form-control text-center">{{old('acompalmuerzo',$menu->acompalmuerzo)}}</textarea>
                        </div>
                		</div>
                		<div class="form-group">
                			<label>Cena</label>
							<br>
                			<textarea type="text" name="cena" id="cena" class="form-control text-center">{{old('cena',$menu->cena)}}</textarea>
                		</div>
                        <div class="form-group">
							<label>Acompañamiento de cena</label><br>
							<textarea type="text" name="acompcena" id="acompcena" class="form-control text-center">{{old('acompcena',$menu->acompcena)}}</textarea>
						</div>
                		<button type="submit" class="btn btn-success btn-lg">Actualizar</button>
                	</form>
                </div>
		</div>
</div>

@endsection

