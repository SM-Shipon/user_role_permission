<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => 'auth'], function () {


    /** Dashboard Routes */
    Route::get('/','DashboardController@index');

    /** Role Routes */
    Route::get('role-manage','RoleController@index');
    Route::get('role-create','RoleController@create');
    Route::post('role/store','RoleController@store');
    Route::get('role-edit/{id}','RoleController@edit');
    Route::post('role/update/{id}','RoleController@update');
    Route::post('role-delete/{id}', 'RoleController@destroy');

    /** User Routes */
    Route::get('user-manage','UserController@index');
    Route::get('user-create','UserController@create');
    Route::post('user/store','UserController@store');
    Route::get('user-edit/{id}','UserController@edit');
    Route::post('user/update/{id}','UserController@update');
    Route::post('user-delete/{id}', 'UserController@destroy');
    /** Permission Routes */
    Route::get('permission-manage','PermissionController@index');
    Route::get('permission-create','PermissionController@create');
    Route::post('permission/store','PermissionController@store');
    Route::get('permission-edit/{id}','PermissionController@edit');
    Route::post('permission/update/{id}','PermissionController@update');
    Route::delete('permission-delete/{id}','PermissionController@destroy');

    /** Assign Permission Routes */
    Route::get('permission-assign/{id}','PermissionController@assign_permission');
    Route::post('permission/assign/update/{id}','PermissionController@assign_permission_update');
});

/** Form Routes */
Route::get('form-general','FormController@general');
Route::get('form-advance','FormController@advance');
Route::get('form-editor','FormController@editor');

/** Table Routes */
Route::get('table/simple','TableController@simple');
Route::get('table/data','TableController@data');


/** Example Pages Routes */
//Route::get('example/invoice','ExamplesController@invoice');
Route::get('example/profile','ExamplesController@profile');
//Route::get('example/login','ExamplesController@login');
//Route::get('example/register','ExamplesController@register');
//Route::get('example/reset','ExamplesController@reset');
//Route::get('example/lockscreen','ExamplesController@lockscreen');
//Route::get('example/404','ExamplesController@error404');
//Route::get('example/500','ExamplesController@error500');
//Route::get('example/blank','ExamplesController@blank');
//Route::get('example/pace','ExamplesController@pace');
//Route::get('example/invoice-print','ExamplesController@invoicePrint');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
