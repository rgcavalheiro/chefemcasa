<?php

use Illuminate\Support\Facades\Route;

// Rota da página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota de registro de usuário
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

// Rota de login
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

// Rota para a página de pesquisa de receitas
Route::get('/search', 'App\Http\Controllers\RecipeController@searchForm');
Route::post('/search', 'App\Http\Controllers\RecipeController@searchRecipes');

// Rota para a exibição de uma receita específica
Route::get('/recipe/{id}', 'App\Http\Controllers\RecipeController@show');

// Rota para o gerenciamento de ingredientes
Route::get('/ingredients', 'App\Http\Controllers\IngredientController@index');
Route::post('/ingredients', 'App\Http\Controllers\IngredientController@store');
Route::delete('/ingredients/{id}', 'App\Http\Controllers\IngredientController@destroy');

// Rota para exibir as receitas favoritas do usuário
Route::get('/favorites', 'App\Http\Controllers\FavoriteController@index');

// Rota para salvar ou remover uma receita como favorita
Route::post('/favorites', 'App\Http\Controllers\FavoriteController@store');
Route::delete('/favorites/{id}', 'App\Http\Controllers\FavoriteController@destroy');
