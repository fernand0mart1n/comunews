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

    //Route::get('/perfil/publico/{user}', 'PagesController@perfil');

    Route::get('/', 'PagesController@index');

    Route::get('/perfil', 'PagesController@perfil');

    Route::get('/perfil/crear_noticia', 'PagesController@crear_noticia');

    Route::get('/perfil/mis_noticias','NoticiasController@mis_noticias');

    Route::get('/perfil/mis_suscriptores', 'PagesController@mis_suscriptores');

    Route::get('/perfil/editar_perfil', 'PagesController@editar_perfil');

	

	Route::post('/nueva_noticia','NoticiasController@nueva_noticia');

	Route::get('/noticia/{id}/{titulo}','NoticiasController@ver_noticia');

	Route::get('/busqueda','BusquedaController@buscar');

});
