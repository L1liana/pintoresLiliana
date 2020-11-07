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

Route::get('/',['uses'=>'Controlador@login','as'=>'login']);
Route::get('/adolf',['uses'=>'Controlador@adolf','as'=>'adolf']);
Route::get('/edvar',['uses'=>'Controlador@edvar','as'=>'edvar']);
Route::get('/t',['uses'=>'Controlador@t','as'=>'t']);
Route::get('/l',['uses'=>'Controlador@l','as'=>'l']);
Route::get('/o',['uses'=>'Controlador@o','as'=>'o']);
Route::get('/v',['uses'=>'Controlador@v','as'=>'v']);
Route::post('/valida',['uses'=>'Controlador@validarLogin','as'=>'validarLogin']);

