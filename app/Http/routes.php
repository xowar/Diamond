<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




// Rutas del registro de propiedad

Route::get('home/register_property', 'RegisterPropertyController@register_property');
Route::get('home/table_propiedades', 'RegisterPropertyController@table_propiedades');
//Route::get('home/table_propiedades/destroy/{id}/', 'RegisterPropertyController@destroy');
Route::get('home/table_propiedades/editar_propiedades/{id}', 'RegisterPropertyController@editar_propiedades');
Route::post('home/store', 'RegisterPropertyController@store');
Route::match(['put', 'patch'], 'home/table_propiedades/update/{id}','RegisterPropertyController@update');

Route::get('home/property_delete', 'RegisterPropertyController@property_delete');
Route::get('home/property_delete/restore/{id}', 'RegisterPropertyController@restore');

Route::get('home/table_propiedades/reason_delete/{id}', 'RegisterPropertyController@reason_delete');

Route::match(['put', 'patch'], 'home/table_propiedades/destroy/{id}/','RegisterPropertyController@destroy');