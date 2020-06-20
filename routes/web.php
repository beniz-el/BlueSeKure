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


Route::get('/devenirhote', function(){
	return view('hote.devenirhote');
});

      Route::get('/apropos', function(){
	return view('apropos');
});

   Route::get('/A-Propos', function(){
	return view('apropos');
});


Route::post('/point', 'hoteController@search');

Route::post('/lastcommentaire', 'commentaireController@show');

Route::resource('hote', 'devenirhoteController');
Route::resource('commentaire', 'commentaireController');
Route::resource('lastcommentaire', 'commentaireController');


Route::get('/code', 'commentaireController@show');



Route::post('/codesearch', 'hoteController@searchcode');


    Route::get('/forum', function(){
	return view('forum');
});

      Route::get('/offre', function(){
	return view('offre');
});

  
