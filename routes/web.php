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

Auth::routes();

Route::group(['prefix' => '/api'], function (){

    Route::post('/results/add', 'QuizController@insertItem');
    Route::get('/results/', 'QuizController@getList');
    Route::get('/result/{id}', 'QuizController@getItem');
});
Route::get('/', 'APIController@getSPA');
Route::get('/{a}', 'APIController@getSPA');
Route::get('/{a}/{b}', 'APIController@getSPA');
Route::get('/{a}/{b}/{c}', 'APIController@getSPA');
Route::get('/{a}/{b}/{c}/{d}', 'APIController@getSPA');