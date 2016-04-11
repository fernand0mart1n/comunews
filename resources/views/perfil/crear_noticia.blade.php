@extends('home')

<script src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>


@section('sidebar')
	
	@section('estado1', 'active')

	@parent

@endsection

@section('content')
<div class="col-md-9">
 <div class="row">

  	<div class="panel panel-default">
    <div class="panel-body">

    	<legend>Crear Noticia</legend>

    	<form method="POST" action="{{ url('/nueva_noticia') }}" accept-charset="UTF-8" enctype="multipart/form-data">

    		{!! csrf_field() !!}

    		<div class="form-group col-lg-12">

        		<label for="titulo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de tu Noticia"><br>

                <label for="miniatura"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Miniatura</label>
                <input type="file"  id="miniatura" name="miniatura" placeholder="Miniatura de la noticia"><br>

    	        <label for="textArea"><span class="glyphicon glyphicon-align-center"></span>&nbsp;&nbsp;&nbsp;Descripcion Breve</label>
    	        <textarea class="form-control" rows="3" id="textArea" name="descripcion"></textarea>
    	        <span class="help-block">Una breve descripcion sobre tu noticia.</span>
	        </div>

    		<div class="col-md-12">
	            <textarea name="contenido" id="contenido" rows="10" cols="80">
	                Comienza a crear tu noticia aqui..
	            </textarea>
	            <script>
	                // Replace the <textarea id="contenido"> with a CKEditor
	                // instance, using default configuration.
	                CKEDITOR.replace( 'contenido' );
	            </script>
	        </div>

	        &nbsp;

            <div class="form-group">
                <div class="col-md-offset-10">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i>Guardar
                    </button>
                </div>
            </div>

        </form>

    </div>
    </div>

</div>
</div>
@endsection