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

    	<form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                Comienza a crear tu noticia aqui..
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>

    </div>
    </div>

</div>
</div>
@endsection