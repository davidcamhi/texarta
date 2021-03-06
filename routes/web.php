<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('web_home.index');
});
Route::get('/menu', function () {
    return view('web_home.test');
});
Auth::routes();
//ADMIN
//DASBOARD
Route::get('/admin', 'DashboardController@index');
Route::get('/calendar', 'CalendarController@index');
//USERS
Route::get('usuarios/getDelete', 'UsersController@getDelete');
Route::post('usuarios/postUser', 'UsersController@postUser');
Route::resource('usuarios', 'UsersController');
//CATEGORIES
Route::get('lineas/getDelete', 'CategoriesController@getDelete');
Route::post('lineas/postCategory', 'CategoriesController@postCategory');
Route::resource('lineas', 'CategoriesController');

//SLIDES
Route::get('admin_slides/getDelete', 'SlidesController@getDelete');
Route::post('admin_slides/postSlide', 'SlidesController@postSlide');
Route::resource('admin_slides', 'SlidesController');

//CATALOGO
Route::post('catalogo/postCatalog', 'CatalogController@postCatalog');
Route::resource('catalogo', 'CatalogController');
Route::post('catalogo/getDelete', 'CatalogController@getDelete');


//COLORS
Route::get('admin_colores/getDelete', 'ColorsController@getDelete');
Route::post('admin_colores/postColor', 'ColorsController@postColor');
Route::resource('admin_colores', 'ColorsController');
//PRODUCTS
Route::get('productos/getDelete', 'ProductsController@getDelete');
Route::post('productos/postProduct', 'ProductsController@postProduct');
Route::resource('productos', 'ProductsController');
//CONTACT
Route::get('mensajes/getDelete', 'MessagesController@getDelete');
Route::post('mensajes/postMessage', 'MessagesController@postMessage');
Route::resource('mensajes', 'MessagesController');

Route::get('muestras/getDelete', 'SamplesController@getDelete');
Route::post('muestras/postSample', 'SamplesController@postSample');
Route::resource('muestras', 'SamplesController');

Route::get('cotizacion/getDelete', 'PricesController@getDelete');
Route::post('cotizacion/postPrice', 'PricesController@postPrice');
Route::resource('cotizacion', 'PricesController');

Route::post('info_contacto/postContact', 'ContactController@postContact');
Route::resource('info_contacto', 'ContactController');



//WEB
//HOME
Route::resource('/', 'HomeController');

//PRODUCTS
Route::get('lista-productos/buscar', 'WebProductsController@search');
Route::resource('lista-productos', 'WebProductsController');

Route::get('producto/{category_id}/{name}', ['as' => 'producto', 'uses' => 'WebProductsController@show']);

//CATEGORIES
//Route::resource('linea', 'WebCategoriesController');
//COLORS
Route::get('colores/{name}',  ['as' => 'color', 'uses' => 'WebColorsController@show']);
Route::get('colores', 'WebColorsController@index');

Route::get('{name}', ['as' => 'linea', 'uses' => 'WebCategoriesController@show']);