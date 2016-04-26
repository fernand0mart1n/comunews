<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DB;

use App\User;

use App\Noticias;

class BusquedaController extends Controller
{
    public function buscar(Request $req){
        
        $term = $req->input('buscar');

        $usuarios = User::
            where('nombres', 'LIKE', '%'.$term.'%')
            ->orWhere('apellidos', 'LIKE', '%'.$term.'%')
            ->orWhere('name', 'LIKE', '%'.$term.'%')
            ->limit(6)->get();
            
        $noticias = Noticias::
            where('titulo', 'LIKE', '%'.$term.'%')
            ->limit(6)->get();

        return view('busqueda.resultados_busqueda', compact('usuarios','noticias'));
    }
}
