<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        return view('welcome', compact('user'));

    }

    public function perfil()
    {

        $usuarioid = Auth::user();

        $usuario = User::find($usuarioid->id);

        return view('perfil', compact('usuario'));

    }

    public function crear_noticia()
    {

        $usuarioid = Auth::user();

        $usuario = User::find($usuarioid->id);

        return view('perfil.crear_noticia', compact('usuario'));

    }

    public function mis_noticias()
    {
        
        $usuarioid = Auth::user();

        $usuario = User::find($usuarioid->id);

        return view('perfil.mis_noticias', compact('usuario'));

    }

    public function mis_suscriptores()
    {

        $usuarioid = Auth::user();

        $usuario = User::find($usuarioid->id);

        return view('perfil.mis_suscriptores', compact('usuario'));

    }

    public function editar_perfil()
    {

        $usuarioid = Auth::user();

        $usuario = User::find($usuarioid->id);

        return view('perfil.editar_perfil', compact('usuario'));

    }

}
