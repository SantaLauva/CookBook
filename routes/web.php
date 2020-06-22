<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createRecipe', 'RecipeController@create')->middleware('auth');
Route::post('/createRecipe', 'RecipeController@store');

Route::get('Recipe/{id}', 'RecipeController@show');

Route::get('Recipes', 'RecipeController@index');
Route::get('CookBooks', 'AllCookBooksController@show');

Route::get('Recipe/{id}/edit', 'RecipeController@edit');
Route::post('Recipe/{id}/edit', 'RecipeController@update');