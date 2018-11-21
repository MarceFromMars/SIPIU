@extends('layout')

@section('Contenido_interno')
	<style>
	.Profile-title{
		font-family: verdana;
		color: #cba;
		font-style: italic;
		text-align: inline;
	}	
	.Profile-text{
		font-family: arial;
		color: orange;
		text-align: inline;
	}
	</style>
	<h2 class="Profile-title">Perfil</h2>

	<h3>Nombre: </h3>
	<h4 class="Profile-text"> {{auth()->user()->nombre}} </h4>
	<h3>Apellido Paterno:</h3>
	<h4 class="Profile-text">{{auth()->user()->apellido_p}}	</h3>
	<h3>Apellido Materno: </h3>
	<h4 class="Profile-text">{{auth()->user()->apellido_m}}</h4>
	</h3>
	<h3>Fecha de Nacimiento:</h3>
	<h4 class="Profile-text">
		 {{auth()->user()->fecha_nac}}
	</h4>
	<h3>Username:</h3>
	<h4 class="Profile-text">
		 {{auth()->user()->username}}
	</h4>
	<h3>Rol:</h3>
	<h4 class="Profile-text">
		 {{auth()->user()->obten(auth()->user()->id)}}
	</h4>
	<h3>Division:</h3>
	<h4 class="Profile-text"> {{auth()->user()->obten_div(auth()->user()->id)}}</h4>

@endsection
