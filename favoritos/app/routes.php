<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/u', function()
{
	return "hoal";
});

Route::get('/hola', function()
{
	/*$user = new Usuario;	
	$user->codigousuario="1";
	$user->usuario="hernan";
	$user->clave="hernan";
	$user->edad=18;
	$user->save();
	return "gikasd";
	*/
});

//Route::controller('/usuarios','UsuariosController@index');

//Route::controller('UsuariosController','index' );
Route::get('foo', 'UsuariosController@index');
Route::get('show/{id}',  ['uses' =>'UsuariosController@show']);
// api/photos
  Route::group(array('prefix' => 'api'), function()
    {
        Route::resource('photos/{id}', 'UsuariosController');
        
    });