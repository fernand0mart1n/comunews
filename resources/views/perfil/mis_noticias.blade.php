@extends('home')

@section('sidebar')
	
	@section('estado2', 'active')

	@parent

@endsection

@section('content')
<div class="col-md-9">
  <div class="col-md-12">
  <div class="row">

    @if($miContenido->isEmpty())

    	<div class="panel panel-default">
		  <div class="panel-body">
		    Ups! parece que no tienes noticias..  &nbsp;&nbsp;&nbsp; :(
		  </div>
		</div>

    @else

    	<div class="list-group">
	  	@foreach ($miContenido as $noticia)
   
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
						<h4>Autor: {{ $noticia->usuario_noticia->name }} </h4>
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
  {!! $miContenido->render() !!}
  </div>

</div>

@endsection