@extends('layouts.app')

@section('navbar')

  <li ><a href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a></li>
  <li class="active"><a href="{{ url('/home') }}">Perfil <span class="sr-only">(current)</span></a></li>

@endsection

@section('sidebar')
<div class="col-md-3">

  <div class="list-group">
    <a href="/crear_noticia" class="list-group-item @yield('estado1')"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> &nbsp;&nbsp;&nbsp; Crear Noticia</a>
    <a href="/mis_noticias" class="list-group-item @yield('estado2')"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> &nbsp;&nbsp;&nbsp;Mis noticias</a>
    <a href="/mis_suscriptores" class="list-group-item @yield('estado3')"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> &nbsp;&nbsp;&nbsp;Mis suscriptores</a>
    <a href="/editar_perfil" class="list-group-item @yield('estado4')"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;&nbsp;&nbsp;Editar perfil</a>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Suscripciones</div>
    
    <div class="list-group">
      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">10</span> &nbsp;&nbsp;&nbsp;July3p</a>
      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">2</span> &nbsp;&nbsp;&nbsp;The Request Channel</a>
      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">5</span> &nbsp;&nbsp;&nbsp;Valdesoft</a>
      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">14</span> &nbsp;&nbsp;&nbsp;Pablo Carro</a>
      <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="badge">7</span> &nbsp;&nbsp;&nbsp;Mascarin</a>
    </div>
  </div>

</div>  
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