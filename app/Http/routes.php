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



Route::group(['middleware' => 'auth'], function () {
// Rutas del registro de propiedad

Route::get('home/register_property/{puesto}', 'RegisterPropertyController@register_property');
Route::get('home/table_propiedades/{puesto}', 'RegisterPropertyController@table_propiedades');
//Route::get('home/table_propiedades/destroy/{id}/', 'RegisterPropertyController@destroy');
Route::get('home/table_propiedades/editar_propiedades/{puesto}/{id}', 'RegisterPropertyController@editar_propiedades');
Route::post('home/store', 'RegisterPropertyController@store');
Route::match(['put', 'patch'], 'home/table_propiedades/update/{id}','RegisterPropertyController@update');
Route::get('home/property_delete/{puesto}', 'RegisterPropertyController@property_delete');
Route::get('home/property_delete/restore/{puesto}/{id}', 'RegisterPropertyController@restore');
Route::get('home/table_propiedades/reason_delete/{puesto}/{id}', 'RegisterPropertyController@reason_delete');
Route::match(['put', 'patch'], 'home/table_propiedades/destroy/{id}/','RegisterPropertyController@destroy');
Route::get('home/table_propiedades/documentos/{id}', 'RegisterPropertyController@documentos');

Route::get('home/table_renovar_propiedad/{puesto}', 'RegisterPropertyController@table_renovar_propiedad');



// personal -------------------------------

Route::get('home/register_users/{puesto}', 'UserController@index');
Route::post('home/create_users', 'UserController@store');
Route::get('home/table_users/{puesto}', 'UserController@table_users');
Route::get('home/table_users/edit/{puesto}/{id}', 'UserController@edit');
Route::match(['put', 'patch'], 'home/table_users/update/{id}','UserController@update');
Route::get('home/table_users/destroy/{puesto}/{id}', 'UserController@destroy');
Route::get('home/table_users_delete/{puestos}', 'UserController@table_users_delete');
Route::get('home/table_users/restore/{puesto}/{id}', 'UserController@restore');
Route::get('home/table_users/documentos/{id}', 'UserController@documentos');
Route::get('home/table_users_renew/{puesto}', 'UserController@table_users_renew');

// ADMIN -------------------------------------------------------------

Route::get('home/admin_table_users/{puesto}', 'AdminController@index');
Route::get('home/admin_create_acc/{puesto}/{id}', 'AdminController@admin_create_acc');
Route::match(['put', 'patch'], 'home/admin_create_acc/create/{id}','AdminController@create');
Route::get('home/admin_table_users/destroy_acc/{puesto}/{id}', 'AdminController@destroy_acc');
Route::get('home/agregar_info/{puesto}', 'AdminController@agregar_info');
Route::post('home/agregar_info/add_colonia','AdminController@add_colonia');
Route::post('home/agregar_info/add_ciudades','AdminController@add_ciudades');
Route::post('home/agregar_info/add_estados','AdminController@add_estados');
Route::post('home/agregar_info/add_oficinas','AdminController@add_oficinas');
Route::post('home/agregar_info/add_creditos','AdminController@add_creditos');
Route::post('home/agregar_info/add_tipo_propiedad','AdminController@add_tipo_propiedad');
Route::post('home/agregar_info/add_razon_eliminar','AdminController@add_razon_eliminar');
Route::post('home/agregar_info/add_comiciones','AdminController@add_comiciones');
Route::post('home/agregar_info/add_puesto','AdminController@add_puesto');
Route::match(['put', 'patch'], 'home/agregar_info/agregar_permiso/{id}','AdminController@update');
Route::post('home/agregar_permiso', 'AdminController@agregar_permiso');

// EXCEL --------------------------------------------------------------------------------------

Route::get('home/reportes_excel', 'ReportesExcelController@index');
Route::get('home/reportes_excel/excel_propiedades', 'ReportesExcelController@excel_propiedades');
Route::post('home/reportes_excel/excel_propiedades_asesor', 'ReportesExcelController@excel_propiedades_asesor');
Route::post('home/reportes_excel/listing', 'ReportesExcelController@listing');


// Recursos humanos ---------------------------------------------------------------------------

Route::get('home/examen_colores', 'RecursosHumanosController@index');
Route::post('home/examen_colores/prospectos', 'RecursosHumanosController@prospectos');
Route::get('home/table_prospectos', 'RecursosHumanosController@table_prospectos');
Route::get('home/table_prospectos/edit/{id}', 'RecursosHumanosController@edit');

Route::match(['put', 'patch'], 'home/table_prospectos/update/{id}','RecursosHumanosController@update');

});

//------------------- ventas ----------------------------
Route::get('home/filtro_propiedad_venta/{puesto}', 'VentasController@filtro_propiedad_venta');
Route::post('home/filtro_propiedad_venta/resultado_propiedades', 'VentasController@resultado_propiedades');
Route::get('home/filtro_propiedad_venta/propiedad_cliente/{puesto}/{id}', 'VentasController@propiedad_cliente');


//--------------------- MODULOS -------------------------------------

Route::get('home/modulos/prospecto/{puesto}', 'ModulosController@prospecto');
Route::post('home/modulos/prospecto/save_prospecto', 'ModulosController@save_prospecto');
Route::get('home/modulos/visitas/{puesto}', 'ModulosController@visitas');
Route::post('home/modulos/visitas/agregar_visitas', 'ModulosController@agregar_visitas');
Route::get('home/modulos/table_prospecto/{id}', 'ModulosController@table_prospecto');
Route::get('home/modulos/table_prospecto/seguimiento/{id}', 'ModulosController@seguimiento');
Route::post('home/modulos/table_prospecto/seguimiento/add_actividad', 'ModulosController@add_actividad');
Route::post('home/modulos/table_prospecto/seguimiento/editar_prospecto', 'ModulosController@editar_prospecto');

//----------------------- MKT -----------------------------------------------

Route::get('home/mkt/agregar_proyecto', 'MktController@index');
Route::post('home/mkt/guardar_proyecto', 'MktController@guardar_proyecto');
Route::get('home/mkt/registro_articulo', 'MktController@registro_articulo');
Route::post('home/mkt/buscar_por_proyecto', 'MktController@buscar_por_proyecto');
Route::post('home/mkt/buscar_por_proyecto/save_articulo', 'MktController@save_articulo');
Route::get('home/mkt/buscar_por_proyecto/proceso/{id_articulo}/{id_proyecto}','MktController@proceso');
Route::post('home/mkt/buscar_por_proyecto/proceso_guardar', 'MktController@proceso_guardar');
Route::get('home/mkt/buscar_por_proyecto/por_autorizar/{id}','MktController@por_autorizar');
Route::post('home/mkt/buscar_por_proyecto/por_autorizar_guardar', 'MktController@por_autorizar_guardar');
Route::get('home/mkt/buscar_por_proyecto/mostrar/{id_articulo}','MktController@mostrar');
Route::get('home/mkt/buscar_por_proyecto/eliminar_articulo/{id_articulos}/{id_proyectos}','MktController@eliminar_articulo');



Route::post('home/mkt/buscar_por_id', 'MktController@buscar_por_id');
Route::post('home/mkt/buscar_por_propiedad/save_articulo_propiedades', 'MktController@save_articulo_propiedades');
Route::get('home/mkt/buscar_por_propiedad/proceso_propiedades/{id_articulo}/{id_propiedad}','MktController@proceso_propiedades');
Route::get('home/mkt/buscar_por_propiedad/por_autorizar_propiedades/{id}','MktController@por_autorizar_propiedades');
Route::post('home/mkt/buscar_por_propiedad/por_autorizar_guardar_propiedad', 'MktController@por_autorizar_guardar_propiedad');
Route::get('home/mkt/buscar_por_propiedad/mostrar_propiedad/{id_articulo}','MktController@mostrar_propiedad');
Route::match(['put', 'patch'], 'home/table_users/mkt_update_propiedad/{id}','MktController@mkt_update_propiedad');
Route::match(['put', 'patch'], 'home/table_users/mkt_update_proyectos/{id}','MktController@mkt_update_proyectos');
Route::get('home/mkt/buscar_por_propiedad/eliminar_propiedad/{id_articulos}/{id_proyectos}','MktController@eliminar_propiedad');


Route::get('home/mkt/agregar_negocio', 'MktController@agregar_negocio');
Route::post('home/mkt/guardar_negocio', 'MktController@guardar_negocio');
Route::post('home/mkt/buscar_por_negocios', 'MktController@buscar_por_negocios');
Route::post('home/mkt/buscar_por_negocios/save_articulo_negocios', 'MktController@save_articulo_negocios');
Route::get('home/mkt/buscar_por_negocios/proceso_negocios/{id_articulo}/{id_negocio}','MktController@proceso_negocios');
Route::get('home/mkt/buscar_por_negocios/por_autorizar_negocios/{id}','MktController@por_autorizar_negocios');
Route::post('home/mkt/buscar_por_negocios/por_autorizar_guardar_negocio', 'MktController@por_autorizar_guardar_negocio');
Route::get('home/mkt/buscar_por_negocios/mostrar_negocios/{id_articulo}','MktController@mostrar_negocios');
Route::match(['put', 'patch'], 'home/table_users/mkt_update_negocio/{id}','MktController@mkt_update_negocio');
Route::get('home/mkt/buscar_por_negocios/eliminar_negocios/{id_articulos}/{id_negocios}','MktController@eliminar_negocios');