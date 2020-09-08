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
Route::get('logg','con1@logg' );
Route::post('goinsert','con1@goinsert');

Route::get('seclogg','con1@seclogg' );
Route::post('logg2','con1@logg2' );



Route::get('insertproduct','con1@insertproduct' );
Route::post('go','con1@go');

Route::get('show','con1@show' );
Route::get('showpro','con1@showpro' );


Route::get('{pid}/delete','con1@delete');


Route::get('{pid}/edit','con1@edit');

Route::post('{pid}/update','con1@update');

Route::get('showpro','con1@show' );





  