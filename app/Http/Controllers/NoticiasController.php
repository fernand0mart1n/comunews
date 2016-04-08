<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\Noticias;

use App\User;

class NoticiasController extends Controller
{

	public function mis_noticias() {

		$usuarioid = Auth::user();
        $user = User::find($usuarioid->id);

        $miContenido = Noticias::where('autor', '=', "$user->id")->paginate(9);

        return view('perfil.mis_noticias',compact('miContenido'));
	}
	
	public function nueva_noticia(Request $req) {

        function limpiarString($texto)
        {
            $textoLimpio = str_replace(array('á','à','â','ã','ª','ä'),"a",$texto);
            $textoLimpio = str_replace(array('Á','À','Â','Ã','Ä'),"A",$textoLimpio);
            $textoLimpio = str_replace(array('Í','Ì','Î','Ï'),"I",$textoLimpio);
            $textoLimpio = str_replace(array('í','ì','î','ï'),"i",$textoLimpio);
            $textoLimpio = str_replace(array('é','è','ê','ë'),"e",$textoLimpio);
            $textoLimpio = str_replace(array('É','È','Ê','Ë'),"E",$textoLimpio);
            $textoLimpio = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$textoLimpio);
            $textoLimpio = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$textoLimpio);
            $textoLimpio = str_replace(array('ú','ù','û','ü'),"u",$textoLimpio);
            $textoLimpio = str_replace(array('Ú','Ù','Û','Ü'),"U",$textoLimpio);
            $textoLimpio = str_replace(array('[','^','´','`','¨','~',']'),"",$textoLimpio);
            $textoLimpio = str_replace("ç","c",$textoLimpio);
            $textoLimpio = str_replace("Ç","C",$textoLimpio);
            $textoLimpio = str_replace("ñ","n",$textoLimpio);
            $textoLimpio = str_replace("Ñ","N",$textoLimpio);
            $textoLimpio = str_replace("Ý","Y",$textoLimpio);
            $textoLimpio = str_replace("ý","y",$textoLimpio);
             
            $textoLimpio = str_replace("&aacute;","a",$textoLimpio);
            $textoLimpio = str_replace("&Aacute;","A",$textoLimpio);
            $textoLimpio = str_replace("&eacute;","e",$textoLimpio);
            $textoLimpio = str_replace("&Eacute;","E",$textoLimpio);
            $textoLimpio = str_replace("&iacute;","i",$textoLimpio);
            $textoLimpio = str_replace("&Iacute;","I",$textoLimpio);
            $textoLimpio = str_replace("&oacute;","o",$textoLimpio);
            $textoLimpio = str_replace("&Oacute;","O",$textoLimpio);
            $textoLimpio = str_replace("&uacute;","u",$textoLimpio);
            $textoLimpio = str_replace("&Uacute;","U",$textoLimpio);

            $textoLimpio = preg_replace('([^A-Za-z0-9/\s/])', '', $textoLimpio);
            $textoLimpio = preg_replace('/\s/', '-', $textoLimpio);
            
            return $textoLimpio;
        }

		/*
		$this->validate($request, [
            'editor1'    => 'min:150|max:1500',
        ]);
		*/

		$usuarioid = Auth::user();
        $user = User::find($usuarioid->id);

        $archivo = $req->file('file');

        $nombreImagen = $user->name.$archivo->getClientOriginalName();

        $noticia = new Noticias;

        $noticia->titulo		= $req->input('titulo');
        $noticia->autor 		= $user->id;
        $noticia->descripcion	= $req->input('descripcion');
        $noticia->contenido 	= $req->input('contenido');
        $noticia->url           = limpiarString($req->input('titulo'));
        $noticia->imagen        = $nombreImagen;

        $noticia->save();

        return redirect('/mis_noticias');
	}

    public function ver_noticia($id, $titulo) {

        $miNoticia = Noticias::find($id);

        if($miNoticia->url == $titulo)
        {
            return view('visor_noticia',compact('miNoticia'));
        }


    }

}
