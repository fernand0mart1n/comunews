@extends('layouts.app')

@section('navbar')

  <li ><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
  <li ><a href="{{ url('/home') }}">Perfil <span class="sr-only">(current)</span></a></li>

@endsection

@section('content')

<div class="col-md-12">
<div class="row">

@if($noticias->isEmpty())

	<div class="panel panel-default">
	  <div class="panel-body">
	    No se encontraron noticias..  &nbsp;&nbsp;&nbsp; :O
	  </div>
	</div>

@else

	<div class="list-group">
  	@foreach ($noticias as $noticia)

	  	<a href='{{ url("/noticia/$noticia->id/$noticia->url") }}' class="list-group-item">

		<div class="media">
		  <div class="media-left">
		      <img src="images/{{ $noticia->imagen }}" alt="..." class="imgNoticia">
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

@endif

</div>
{!! $noticias->render() !!}
</div>

<div class="col-md-12">
<div class="row">

@if($usuarios->isEmpty())

	<div class="panel panel-default">
	  <div class="panel-body">
	    No se encontraron usuarios..  &nbsp;&nbsp;&nbsp; :/
	  </div>
	</div>

@else

  	@foreach ($usuarios as $usuario)

	  	<div class="col-xs-6 col-sm-6 col-md-4">

			<a href='{{ url("/$usuario->name") }}' style="text-decoration:none">

	        <div class="thumbnail">
	          <img src="images/{{ $usuario->imagen_perfil }}" id="imgthumb" alt="...">
	          <div class="caption">
	            <legend>{{ $usuario->nombres }}&nbsp;{{ $usuario->apellidos }}</legend>
	            <p class="hidden-xs">{{ $usuario->mi_descripcion }}</p>          
	          </div>
	        </div>

	        </a>
	    </div>
	
	@endforeach

@endif

</div>
{!! $usuarios->render() !!}
</div>

@endsection