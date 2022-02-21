@extends('layouts.panel.layout')
@section('title','Dieta Light PANEL')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-12"> 
		<h1 class="text-center tit" style="font-size: 20px; font-weight:bold; margin-bottom:5%;">Crear dia de menu semanal</h2>
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
            <form action="{{route('panel.menu.store')}}" method="POST" class="">
				@csrf 
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Dia</label>
						<select name="dianombre" class="form-control">
						<option value ="Lunes">Lunes</option>
						<option value ="Martes">Martes</option>
						<option value ="Miercoles">Miercoles</option>
						<option value ="Jueves">Jueves</option>
						<option value ="Viernes">Viernes</option>
						<option value ="Sabado">Sabado</option>
						</select>
						@error('dianombre')
						<br>
						<small>*{{$message }}</small>
						<br>	
						@enderror
					</div>
					<div class="form-group col-md-8">
						<label for="">Fecha</label>
						<input type="date" name="dianumero" id="dianumero" class="form-control text-center" placeholder="DiaNro<br />Dia" value="{{isset($menu->dianumero) ? $menu->dianumero : null}}">
							@error('dianumero')
							<br>
							<small>*{{$message }}</small>
							<br>	
							@enderror	
					</div>	
				</div>
                <div class="form-group">
                	<label>Almuerzo</label>
                	<textarea type="text" name="almuerzo" id="almuerzo" class="form-control text-center">{{old('almuerzo') }}</textarea>
					@error('almuerzo')
					<br>
					<small>*{{$message }}</small>
					<br>	
					@enderror
		
                </div>
				<div class="form-group">
					<label>Acompañamiento de Almuerzo</label>
					<textarea type="text" name="acompalmuerzo" id="acompalmuerzo" class="form-control text-center">{{old('acompalmuerzo') }}</textarea>
				</div>
                <div class="form-group">
                	<label>Cena</label>
                	<textarea type="text" name="cena" id="cena" class="form-control text-center">{{old('cena')}}</textarea>
					@error('cena')
					<br>
					<small>*{{$message }}</small>
					<br>	
					@enderror
				</div>
				<div class="form-group">
					<label>Acompañamiento de cena</label><br>
						<textarea type="text" name="acompcena" id="acompcena" class="form-control text-center">{{old('acompcena')}}</textarea>
				</div>
                		<button type="submit" class="btn btn-success btn-lg">Crear</button>
            </form>
        </div>
	</div>

</div>

@endsection

