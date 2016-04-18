@extends('perfil')

@section('navbar')

  <li ><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
  <li class="active"><a href="{{ url('/perfil') }}">Perfil <span class="sr-only">(current)</span></a></li>

@endsection

@section('sidebar')
  
  @section('estado2', 'active')

  @parent

@endsection

@section('content')

<div class="col-md-9">
  	<div class="panel panel-default">
  		<div class="panel-body">

  			<legend>{{ $miNoticia->titulo }}</legend>

  			<p class="lead">{{ $miNoticia->descripcion }}</p>
      		
  			<?php echo $miNoticia->contenido; ?>

        <a href="#" class="btn btn-primary">Editar Noticia</a>
        <a href="#" class="btn btn-danger">Eliminar Noticia</a>

  		</div>
	</div>
</div>

@endsection