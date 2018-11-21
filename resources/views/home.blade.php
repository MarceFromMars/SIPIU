@extends('layout')

@section('Contenido_interno')
	
	<style>
		.titulo{
			text-align: left;
			font-style: italic;
			font-family: arial; 
			color: orange;
			background: #ffe;
		}
		#texto{
			color: green;
			font-family: times new roman;
			font-size: 18px;
			font-style: italic;
			background: #D8F2D3;
		}
		.contenedor{
			width: 90%;
			text-align: justify;
		}
	</style>
	<div class="contenedor" style=": ">
	<h2 class="titulo">¡Bienvenid@ {{auth()->user()->nombre}} {{auth()->user()->apellido_p}} {{auth()->user()->apellido_m}}!</h2>
	
	<h3 class="titulo">Propósito:</h3>
	<h4 id="texto" style="font-size: 20px; font-style: normal;" >
		Este sistema busca gestionar la realización, evaluación y aceptación de Planes e Informes anuales por parte de los profesores de la institución.
	</h4>
	<h3 class="titulo">De qué forma lo lograremos?</h3>
	<ul style="list-style: none;">
	<li><h4 id="texto" style="font-size: 20px; font-style: normal;" >
		Con la correcta gestión de la información por parte del Administrador del sistema.
	</h4></li>
		<li><h4 id="texto" style="font-size: 20px; font-style: normal;" >
		Con una adecuada revisión de los planes e informes por parte del Director.
	</h4></li>
	<li><h4 id="texto" style="font-size: 20px; font-style: normal;" >
		Con la intervención adecuada de los profesores en el software, atendiendo las indicaciones correctamente y realizando sus actividades en tiempo y forma.
	</h4></li>
	<li><h4 id="texto" style="font-size: 20px; font-style: normal;" >
		Con un alcance de información sencillo y completo para el personal administrativo de la aplicación.
	</h4></li>
	</ul>
	<h3 class="titulo">Tus funciones dentro del sistema serán las siguientes:</h3>
			@if(auth()->user()->hasRole(1))
	        <ul class="list-group" >
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Gestionar la información de la institución (nombre, teléfono, tipo de tutoría, etc).
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Crear y administrar a los Usuarios, asignando los roles pertinentes y sus respectivas divisiones.
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Administrar los catálogos de materias, divisiones, lineas de investigación, etc.
				</li>
			</ul>
			@elseif(auth()->user()->hasRole(2))
	        <ul class="list-group" >
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Revisar la correcta inserción de datos dentro de cada plan e informe.
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Aceptar o rechazar planes e informes de los maestros correspondientes a su división.
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Revisar la información de cada profesor correspondiente a su división.
				</li>
			</ul>
			@elseif(auth()->user()->hasRole(3))
	        <ul class="list-group" >
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Crear y  modificar planes anuales de trabajo.
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Crear y  modificar informes anuales de trabajo.
				</li>
			</ul>
			@else
			 <ul class="list-group" >
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Revisar los datos del profesor y obtener los necesarios para llenar los documentos necesarios.
				</li>
				<li class="list-group-item" id="texto" style="border: none;">
					<span class="label label-default label-pill pull-right">{{auth()->user()->obten(auth()->user()->id)}}</span>
					Obtener los planes e informes de cada profesor para poder realizar las actividades necesarias con base en su institución. 
				</li>
			</ul>
			@endif
	
	</div>
@endsection

{{-- Para poder incluir los íconos de cada cosa que necesite ir utilizando, revisar los archivos que trae la plantilla original que 
dejé guardada en descargas --}}