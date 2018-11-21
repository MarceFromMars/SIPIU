@extends('layout')

@section('Contenido_interno')

	<style>
		.titulos{
			color: orange;
			font-family: arial;
			font-style: italic;
		}
	</style>
	<h2 class="titulos" style=" text-align: center;">
		Modificacion de Usuario: {{ $user->nombre }} {{ $user->apellido_p }} {{ $user->apellido_m }}
	</h2>
	<form method="POST", action="{{ route('users.update',$user->id) }}">
		{{ csrf_field() }}
		
		{!! method_field('PUT') !!}
		
		<h4 class="titulos">Datos personales</h4>
		<fieldset class="form-inline">
			<input type="text" class="form-control" name="nombre" id="formGroupExampleInput" value="{{ $user->nombre }}" required>
		</fieldset>
		<br>
		<fieldset class="form-inline">
			<input type="text" class="form-control" name="apellido_p" id="formGroupExampleInput2" value="{{ $user->apellido_p }}" required>
		</fieldset>
		<br>
		<fieldset class="form-inline">
			<input type="text" class="form-control" name="apellido_m" id="formGroupExampleInput" value="{{ $user->apellido_m }}" required>
		</fieldset>
		<br>
		<fieldset class="form-inline">
			<h4 class="titulos">Fecha de Nacimiento</h4>
			<input type="date" class="form-control" name="fecha_nac" id="formGroupExampleInput" value="{{ $user->fecha_nac }}" required>
		</fieldset>
		<br>
		@if(auth()->user()->tipo === 1)
		<h4 class="titulos">Rol de usuario</h4>
		<div class="custom-control custom-radio">
			<label class="custom-control-label">
				<input type="radio" class="custom-control-input"  name="tipo" id="customRadio" value="1">
				Administrador
			</label>
		</div>
		<div class="custom-control custom-radio">
			<label class="custom-control-label">
				<input type="radio" class="custom-control-input" name="tipo" id="customRadio" value="2">
				Director
			</label>
		</div>
		<div class="custom-control custom-radio">
			<label class="custom-control-label">
				<input type="radio" class="custom-control-input" name="tipo" id="customRadio" value="3" checked>
				Profesor
			</label>
		</div>
		<div class="custom-control custom-radio">
			<label class="custom-control-label">
				<input type="radio" class="custom-control-input" name="tipo" id="customRadio" value="4">
				Administrativo
			</label>
		</div>
		@endif
	<div class="container">
		<fieldset class="form-inline">
		<h4 class="titulos">Datos de Acceso</h4>
		<input type="text" class="form-control" name="username" id="formGroupExampleInput" value="{{ $user->username }}" required>
		</fieldset>
		<br>
		<fieldset class="form-inline">
			<input type="password" class="form-control" name="password" id="formGroupExampleInput" placeholder="Password" required>
		</fieldset>
		<br>
	</div>
	@if(auth()->user()->tipo === 1)
		<h4 class="titulos">Division</h4>
		@foreach($division as $div)
		<div class="radio">
			<label>
				<input type="radio" name="id_div" id="exampleRadios1" value=" {{$div->id}} " checked>
				{{$div->descripcion}}
			</label>
		</div>
		@endforeach
		<br>
	@endif
	<input type="submit" value="Enviar">
	</form>
	

@endsection