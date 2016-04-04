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

    	<form method="POST" action="{{ url('/nueva_noticia') }}">

    		<div class="col-md-12">
	            <textarea name="editor1" id="editor1" rows="10" cols="80">
	                Comienza a crear tu noticia aqui..
	            </textarea>
	            <script>
	                // Replace the <textarea id="editor1"> with a CKEditor
	                // instance, using default configuration.
	                CKEDITOR.replace( 'editor1' );
	            </script>
	        </div>

	        &nbsp;

            <div class="form-group">
                <div class="col-md-12 col-md-offset-10">
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