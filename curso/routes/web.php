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


Route::get('/', function () {
    return view('welcome');
});
/*Route::get('ajax',function(){
   return view('message');
});*/
Route::get('/cursos/show', 'CursoController@show');
Route::get('/cursos/detalhes/{id}', 'CursoController@detalhes');

use Illuminate\Http\Request;
Route::post('getCursos', 'CursoController@getCursos')->name('getCursos');



