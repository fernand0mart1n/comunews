<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class BusquedaController extends Controller
{
    public function buscar(Request $req){
        
        $term = $req->input('buscar');

        $usuarios = DB::table('users')
            ->where('nombres', 'LIKE', '%'.$term.'%')
            ->orWhere('apellidos', 'LIKE', '%'.$term.'%')
            ->orWhere('name', 'LIKE', '%'.$term.'%')
            ->paginate(5);

        $noticias = DB::table('noticias')
            ->where('titulo', 'LIKE', '%'.$term.'%')
            ->paginate(5);

        return view('resultados_busqueda', compact('usuarios','noticias'));
    }
}
