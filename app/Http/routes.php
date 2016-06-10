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
    return view('home/index');
});
// Admin
Route::get('/admin', function () {
    return view('admin/index');
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

// Régions
Route::get('/regions/', 'RegionController@index');
Route::get('/regions/pays/{id}', 'RegionController@indexPays');
Route::get('/regions/create', 'RegionController@create');
Route::post('/regions/', 'RegionController@store');
Route::get('/regions/{id}', 'RegionController@show');
Route::get('/regions/{id}/edit', 'RegionController@edit');
Route::put('/regions/{id}', 'RegionController@update');
Route::delete('/regions/{id}', 'RegionController@destroy');

// Badges
Route::get('/badges/', 'BadgeController@index');
Route::get('/badges/create', 'BadgeController@create');
Route::post('/badges/', 'BadgeController@store');
Route::get('/badges/{id}', 'BadgeController@show');
Route::get('/badges/{id}/edit', 'BadgeController@edit');
Route::put('/badges/{id}', 'BadgeController@update');
Route::delete('/badges/{id}', 'BadgeController@destroy');

// Pays
Route::get('/pays/', 'PaysController@index');

// Role
Route::get('/role/', 'RoleController@index');

// Catégories
Route::get('/categories/', 'CategorieController@index');
Route::get('/categories/{id}/sous-categorie', 'CategorieController@indexEnfant');
Route::get('/categories/create', 'CategorieController@create');
Route::post('/categories/', 'CategorieController@store');
Route::get('/categories/{id}', 'CategorieController@show');
Route::get('/categories/{id}/edit', 'CategorieController@edit');
Route::put('/categories/{id}', 'CategorieController@update');
Route::delete('/categories/{id}', 'CategorieController@destroy');

// Login et logout
Route::get('/auth/login', 'AuthController@login');
Route::group(['middleware' => ['auth']], function () {
        Route::get('/auth/logout', 'AuthController@logout');
});


