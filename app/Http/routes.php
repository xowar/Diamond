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
Route::get('home/table_propiedades/documentos/{id}', 'RegisterPropertyController@documentos');

Route::get('home/table_propiedades/excel_propiedades', 'RegisterPropertyController@excel_propiedades');

// personal -------------------------------

Route::get('home/register_users', 'UserController@index');
Route::post('home/create_users', 'UserController@store');
Route::get('home/table_users', 'UserController@table_users');
Route::get('home/table_users/edit/{id}', 'UserController@edit');
Route::match(['put', 'patch'], 'home/table_users/update/{id}','UserController@update');
Route::get('home/table_users/destroy/{id}', 'UserController@destroy');
Route::get('home/table_users_delete', 'UserController@table_users_delete');
Route::get('home/table_users/restore/{id}', 'UserController@restore');

// ADMIN -------------------------------------------------------------

Route::get('home/admin_table_users', 'AdminController@index');
Route::get('home/admin_create_acc/{id}', 'AdminController@admin_create_acc');
Route::match(['put', 'patch'], 'home/admin_create_acc/create/{id}','AdminController@create');
Route::get('home/admin_table_users/destroy_acc/{id}', 'AdminController@destroy_acc');
