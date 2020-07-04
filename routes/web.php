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
    return view('items.index');
});
Route::get('/data-tables', function(){
    return view('items.data-tables');
});

Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan/store','PertanyaanController@store');

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');

Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');

Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');

Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');

Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');




