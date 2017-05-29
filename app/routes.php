<?php

//----user Routes-----

Route::any("users/store", [
    "as" => "users/store",
    "uses" => "UsersController@store"
]);

Route::any("users/login", [
	"as" => "users/login",
	"uses" => "UsersController@login"
]);

Route::any("users/profile", [
	"as" => "users/profile",
	"uses" => "UsersController@profile"
]);

Route::any("/logout", [
	"as" => "users/logout",
	"uses" => "UsersController@logout"
]);

Route::get('/profile', function(){
	return View::make('users.profile');
});


Route::get('/login', function(){
	return View::make('users.login');
});

Route::get('/create', function(){
	return View::make('users.create');
});

Route::get('/', function(){
	return View::make('users.index');
});

//--- end user routes


//---- admin routes

Route::get('admin/', [
    'as' => 'admin/',
    'uses' => 'AdminController@index'
]);

Route::get('admin/create', [
    'as' => 'admin/create',
    'uses' => 'AdminController@create'
]);

Route::any("admin/logout", [
	"as" => "admin/logout",
	"uses" => "UsersController@logout"
]);

Route::any("admin/store", [
	"as" => "admin/store",
	"uses" => "AdminController@storeQuizName"
]);


Route::any("admin/createquestions/{id}", [
	"as" => "admin/createquestions",
	"uses" => "AdminController@createQuestions"
]);

Route::any("admin/storequestions/{id}", [
	"as" => "admin/storequestions",
	"uses" => "AdminController@storeQuestions"
]);

Route::any("admin/completequiz", [
	"as" => "admin/completequiz",
	"uses" => "AdminController@completeQuiz"
]);

Route::any("admin/storeanswers", [
	"as" => "admin/storeanswers",
	"uses" => "AdminController@storeAnswers"
]);

Route::any("admin/delete/{id}", [
      "as" => "admin/delete",
      "uses" => "AdminController@destroy"
]);

Route::any("admin/edit/{id}", [
      "as" => "admin/edit",
      "uses" => "AdminController@edit"
]);

Route::any("admin/update/{id}", [
      "as" => "admin/update",
      "uses" => "AdminController@update"
]);

//--- end admin routes

//-- begin quiz routes

Route::any("/profile", [
	"as" => "users/profile",
	"uses" => "QuizController@index"
]);

Route::any("/quiz/{id}", [
	"as" => "users/quiz",
	"uses" => "QuizController@quiz"
]);

Route::any("/quiz/play/{id}", [
	"as" => "users/play",
	"uses" => "QuizController@playQuiz"
]);

Route::get('quiz/getjson/{id}', 'QuizController@getjson');






//-- end quiz routes
