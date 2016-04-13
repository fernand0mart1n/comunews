<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    
	Route::get('/', function () {
	    return view('welcome');
	});
    
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/crear_noticia', function () {
	    return view('perfil.crear_noticia');
	});

	Route::get('/mis_suscriptores', function () {
	    return view('perfil.mis_suscriptores');
	});

	Route::get('/editar_perfil', function () {
	    return view('perfil.editar_perfil');
	});

	Route::get('/mis_noticias','NoticiasController@mis_noticias');

	Route::post('/nueva_noticia','NoticiasController@nueva_noticia');

	Route::get('/noticia/{id}/{titulo}','NoticiasController@ver_noticia');

	Route::get('/busqueda','BusquedaController@buscar');

});
