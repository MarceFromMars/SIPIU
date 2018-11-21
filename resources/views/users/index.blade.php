@extends('layout')

@section('Contenido_interno')

<table class="table table-inverse">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Fecha de Nacimiento</th>
			<th>Username</th>
			<th>Rol</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
		@if(auth()->user()->tipo === 2)
			@if($user->id_div === auth()->user()->id_div)
				<tr>
					<td>{{$user->nombre}}</td>
					<td>{{$user->apellido_p}}</td>
					<td>{{$user->apellido_m}}</td>
					<td>{{$user->fecha_nac}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->obten($user->id)}}</td>
				</tr>
			@endif
		@else
			<tr>
					<td>{{$user->nombre}}</td>
					<td>{{$user->apellido_p}}</td>
					<td>{{$user->apellido_m}}</td>
					<td>{{$user->fecha_nac}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->obten($user->id)}}</td>
				</tr>
		@endif
		@endforeach
	</tbody>
</table>

@endsection