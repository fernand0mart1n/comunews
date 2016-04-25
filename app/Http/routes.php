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

    //devuelve el index de la pagina
    Route::get('/', 'PagesController@index');

    //devuelve el perfil del usuario logeado
    Route::get('/perfil', 'PagesController@perfil');

    //devuelve el perfil de un usuario en particular
    Route::get('/ver_perfil/{name}', 'PagesController@ver_perfil');

    //devuelve la vista para crear una noticia
    Route::get('/perfil/crear_noticia', 'PagesController@crear_noticia');

    //devuelve la vista de mis noticias
    Route::get('/perfil/mis_noticias','NoticiasController@mis_noticias');

    //devuelve una vista con las personas que estan suscritas a mi actividad
    Route::get('/perfil/mis_suscriptores', 'PagesController@mis_suscriptores');

    //devuelve una vista de edicion de mi perfil
    Route::get('/perfil/editar_perfil', 'PagesController@editar_perfil');

    //ruta post para guardar una nueva noticia
	Route::post('/nueva_noticia','NoticiasController@nueva_noticia');

    //obtener una noticia por su id y su titulo
	Route::get('/noticia/{id}/{titulo}','NoticiasController@ver_noticia');

    //devuelve una vista con resultados de una busqueda de usuarios o noticias
	Route::get('/busqueda','BusquedaController@buscar');

});
