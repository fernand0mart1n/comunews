@extends('layouts.app')

@section('navbar')

  <li ><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
  <li ><a href="{{ url('/perfil') }}">Perfil <span class="sr-only">(current)</span></a></li>

@endsection

@section('content')
<div class="row">
<div class="col-md-7">

@if($noticias->isEmpty())

	<div class="panel panel-default">
	  <div class="panel-body">
	    No se encontraron noticias..  &nbsp;&nbsp;&nbsp; :O
	  </div>
	</div>

@else

	<div class="panel panel-default">
    <div class="panel-heading">Resultados Noticias</div>
	<div class="list-group">
  	@foreach ($noticias as $noticia)

	  	<a href='{{ url("/noticia/$noticia->id/$noticia->url") }}' class="list-group-item">

		<div class="media">
		  <div class="media-left">
		      <img src="images/{{ $noticia->imagen }} " alt="..." class="imgNoticia">
		  </div>
		  <div class="media-body">
		    
			<div class="row">
				<div class="col-md-8">
					<h4 class="list-group-item-heading">{{ $noticia->titulo }}</h4>
	    			<p class="list-group-item-text">{{ $noticia->descripcion }}</p>
				</div>

				<div class="col-md-4">
					
					<h5>Visitas: 1240 - Puntaje promedio: 7,2</h5>
					
				</div>
			</div>

		  </div>
		</div>	

	  </a>
	
	@endforeach
	</div>
	<div class="btn-group btn-group-justified">
  	<a href="#" class="btn btn-default">Ver mas resultados</a>
	</div>
	</div>

@endif

@if($usuarios->isEmpty())

	<div class="panel panel-default">
	  <div class="panel-body">
	    No se encontraron usuarios..  &nbsp;&nbsp;&nbsp; :/
	  </div>
	</div>

@else

	<div class="panel panel-default">
    <div class="panel-heading">Resultados Usuarios</div>
	<div class="list-group">
  	@foreach ($usuarios as $usuario)

	  	<a href='{{ url("ver_perfil/$usuario->name") }}' class="list-group-item">

		<div class="media">
		  <div class="media-left">
		      <img src="images/{{ $usuario->imagen_perfil }}" alt="..." class="imgNoticia">
		  </div>
		  <div class="media-body">
		    
			<div class="row">
				<div class="col-md-8">
					<h4 class="list-group-item-heading">{{ $usuario->nombres }}&nbsp;{{ $usuario->apellidos }}</h4>
	    			<p class="list-group-item-text">{{ $usuario->mi_descripcion }}</p>
				</div>
			</div>

		  </div>
		</div>	

	  </a>
	
	@endforeach
	</div>
	<div class="btn-group btn-group-justified">
  	<a href="#" class="btn btn-default">Ver mas resultados</a>
	</div>
	</div>

@endif

</div>


<div class="col-md-5">

	<div class="panel panel-default">
	  <div class="panel-body">
	   	<h3>Aca van algunos filtros para las busquedas</h3>
	  </div>
	</div>

</div>
</div>

@endsection