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
			<th>Modificar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->nombre}}</td>
				<td>{{$user->apellido_p}}</td>
				<td>{{$user->apellido_m}}</td>
				<td>{{$user->fecha_nac}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->obten($user->id)}}</td>
				<td><a href="{{ route('users.edit', $user->id) }}">Modificar usuario</a></td>
			</tr>
		@endforeach
	</tbody>
</table>



@endsection