@extends('home')

@section('sidebar')
	
	@section('estado2', 'active')

	@parent

@endsection

@section('content')
<div class="col-md-9">
  <div class="col-md-12">
  <div class="row">

  	@foreach ($miContenido as $noticia)

	<div class="col-xs-6 col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ $noticia->imagen }}" alt="...">
          <div class="caption">
            <h3>{{ $noticia->titulo }}</h3>
            <p class="hidden-xs">{{ $noticia->descripcion }}</p>          
          </div>
        </div>
    </div>

	@endforeach

  </div>
  </div>
</div>
@endsection