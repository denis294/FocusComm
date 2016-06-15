<?php
Use App\Models\User;
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

/*
|-------------------------------------------------------------
| Routes publiques, accès sans login
|-------------------------------------------------------------
*/
	// Accueil
	Route::get('/', function () {
		if(!Session::has('user_id'))
    	return view('home/index');
    	else
    	$user = User::find(Session::get('user_id'));
    	return view('home/index')->with('pseudo', $user->pseudo);

	});

	Route::post('/', 'AuthController@login');

	Route::get('/stress', function () {
    	return view('contenu/stress');
	});

	Route::get('/argent', function(){
		return view('contenu/argent');
	});

	Route::get('/generique', function(){
		return view('contenu/generique');
	});

	Route::get('/partner','AccesController@partner');
	Route::post('/partner', 'AuthController@loginPartner');

	// Actualité
	Route::get('/actualites/', 'ActualiteController@index');

	// Quizz
	Route::get('/quizzs/', 'QuizzController@categoriesHasQuizz');
	Route::get('/quizzs/categorie/{id}', 'QuizzController@indexQuizz');
	Route::get('/quizzs/{id}', 'QuizzController@playQuizz');
	
	// Page
	Route::get('/pages/', 'PageController@index');
	Route::get('/pages/categorie/{id}', 'PageController@indexCategorie');
	

	// Login
	Route::post('/', 'AuthController@login');
	Route::get('/login', function(){
		return view('login');
	})->name('login');

	Route::get('/register', 'RegisterController@index');
	Route::post('/register', 'UserController@store');

	// Pas autorisé
	Route::get('/accesInterdit', function(){
		return view('nonAutorise');
	})->name('accesInterdit');
/*
|------------------------------------------------------------
*/
/*
|------------------------------------------------------------
| Routes user, accès avec login
|------------------------------------------------------------
*/
	Route::group(['middleware' => ['auth']], function () {
		Route::get('/logout', 'AuthController@logout');

		// User
		Route::get('/admin/compte', 'UserController@monCompte');
		Route::put('/admin/compte', 'UserController@updateMonCompte');
	});

	// Administration
	Route::get('/admin','AccesController@admin');
	Route::post('/admin', 'AuthController@loginAdmin');
/*
|------------------------------------------------------------
*/
/*
|------------------------------------------------------------
| Routes administration, accès avec login admin
|------------------------------------------------------------
*/
	Route::group(['middleware' => ['authAdmin']], function () {

		Route::get('/admin/accueil', function () {
    		return view('admin/accueil');
		});
		// Quizz
		Route::get('/admin/quizzs/{id}', 'QuizzController@show');
		Route::get('/admin/quizzs/create', 'QuizzController@create');
		Route::post('/admin/quizzs/', 'QuizzController@store');
		Route::get('/admin/quizzs/{id}/edit', 'QuizzController@edit');
		Route::put('/admin/quizzs/{id}', 'QuizzController@update');
		Route::delete('/admin/quizzs/{id}', 'QuizzController@destroy');
		Route::get('/admin/logout', 'AuthController@logoutAdmin');

		// User
		Route::get('/admin/users/', 'UserController@index');
		Route::delete('/user/{id}', 'UserController@destroy');
		Route::get('/user/{id}', 'UserController@show');
		Route::post('/user/', 'UserController@store');
		Route::put('/user/{id}', 'UserController@update');

		// Actualités
		Route::get('/admin/actualites', 'ActualiteController@indexAdmin');
		Route::get('/admin/actualites/create', 'ActualiteController@create');
		Route::post('/admin/actualites/', 'ActualiteController@store');
		Route::get('/admin/actualites/{id}', 'ActualiteController@show');
		Route::get('/admin/actualites/{id}/edit', 'ActualiteController@edit');
		Route::put('/admin/actualites/{id}', 'ActualiteController@update');
		Route::delete('/admin/actualites/{id}', 'ActualiteController@destroy');
		
		// Pages
		Route::get('/admin/pages/create', 'PageController@create');
		Route::post('/admin/pages/', 'PageController@store');
		Route::get('/admin/pages/{id}', 'PageController@show');
		Route::get('/admin/pages/{id}/edit', 'PageController@edit');
		Route::put('/admin/pages/{id}', 'PageController@update');
		Route::delete('/admin/pages/{id}', 'PageController@destroy');
		
		// Régions
		Route::get('/admin/regions/', 'RegionController@index');
		Route::get('/admin/regions/pays/{id}', 'RegionController@indexPays');
		Route::get('/admin/regions/create', 'RegionController@create');
		Route::post('/admin/regions/', 'RegionController@store');
		Route::get('/admin/regions/{id}', 'RegionController@show');
		Route::get('/admin/regions/{id}/edit', 'RegionController@edit');
		Route::put('/admin/regions/{id}', 'RegionController@update');
		Route::delete('/admin/regions/{id}', 'RegionController@destroy');
		// Users
		Route::get('/admin/users/', 'UserController@index');

		// Badges
		Route::get('/admin/badges/', 'BadgeController@index');
		Route::get('/admin/badges/create', 'BadgeController@create');
		Route::post('/admin/badges/', 'BadgeController@store');
		Route::get('/admin/badges/{id}', 'BadgeController@show');
		Route::get('/admin/badges/{id}/edit', 'BadgeController@edit');
		Route::put('/admin/badges/{id}', 'BadgeController@update');
		Route::delete('/admin/badges/{id}', 'BadgeController@destroy');
		// Catégories
		Route::get('/categories/', 'CategorieController@index');
		Route::get('/categories/{id}/sous-categorie', 'CategorieController@indexEnfant');
		Route::get('/categories/create', 'CategorieController@create');
		Route::post('/categories/', 'CategorieController@store');
		Route::get('/categories/{id}', 'CategorieController@show');
		Route::get('/categories/{id}/edit', 'CategorieController@edit');
		Route::put('/categories/{id}', 'CategorieController@update');
		Route::delete('/categories/{id}', 'CategorieController@destroy');
		// Pays
		Route::get('/pays/', 'PaysController@index');
		// Role
		Route::get('/role/', 'RoleController@index');
	});
/*
|----------------------------------------------------------------------------------------------
*/
Route::group(['middleware' => ['authPartner']], function () {
	Route::get('/partner/logout', 'AuthController@logoutPartner');
	Route::get('/partner/quizz', 'QuizzController@MyQuizz');
	Route::get('/partner/quizz/create', function(){
		return view('/partner/quiz/create');
	});
	Route::post('/partner/quizz/' ,'QuizzController@store');

});


