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

// Accueil
Route::get('/', function () {
    return view('welcome');
});

// User
Route::get('/user/', 'UserController@index');            
Route::get('/user/{id}', 'UserController@show');
Route::post('/user/', 'UserController@store');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@destroy'); 

// Actualité
Route::get('/actualites/', 'ActualiteController@index');
Route::get('/actualites/create', 'ActualiteController@create'); 
Route::post('/actualites/', 'ActualiteController@store');            
Route::get('/actualites/{id}', 'ActualiteController@show');
Route::get('/actualites/{id}/edit', 'ActualiteController@edit');
Route::put('/actualites/{id}', 'ActualiteController@update');
Route::delete('/actualites/{id}', 'ActualiteController@destroy');

// Quizz
Route::get('/quizzs/', 'QuizzController@index');
Route::get('/quizzs/categorie/{id}', 'QuizzController@indexQuizz');
Route::get('/quizzs/create', 'QuizzController@create'); 
Route::post('/quizzs/', 'QuizzController@store');            
Route::get('/quizzs/{id}', 'QuizzController@show');
Route::get('/quizzs/{id}/edit', 'QuizzController@edit');
Route::put('/quizzs/{id}', 'QuizzController@update');
Route::delete('/quizzs/{id}', 'QuizzController@destroy');

// Login et logout
Route::get('/auth/login', 'AuthController@login'); 
Route::group(['middleware' => ['auth']], function () {    
        Route::get('/auth/logout', 'AuthController@logout');
});
 

