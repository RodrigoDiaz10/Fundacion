<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


/*  Esta ruta muestra el id del usuario y solo permite id de tipo numeros 
    Este es un ejemplo     */
    Route::get('/users/{id}', function($id){
        return "Mostrando Usuario; {$id}";
    })->where ('id','[0-9]+');
    
    
    /* esta ruta dirige al controlador de laruta a la funcion llamada --INDEX-- */
    Route::get('/users', 'UserController@index');
    
    
    /*  */
    Route::get('/users/{id}', 'UserController@show')
    ->where ('id','[0-9]+');


    /* esta ruta dirige al controlador de laruta a la funcion llamada --Blog-- */
    Route::get('/blog', 'BlogController@all');
