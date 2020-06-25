<?php

use App\Recipe;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
    return view('welcome', ['allrecipes' => Recipe::all()->reverse()->take(6)]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/createRecipe', 'RecipeController@create')->middleware('auth');
Route::post('/createRecipe', 'RecipeController@store');

Route::get('Recipe/{id}', 'RecipeController@show')->middleware('lists');
Route::post('Recipe/{id}/new', 'AllCookBooksController@store');
Route::post('Recipe/{id}/add', 'AllCookBooksController@storeRecipe');


Route::get('Recipes', 'RecipeController@index');
Route::get('CookBooks', 'AllCookBooksController@index');
Route::get('CookBook/{id}', 'AllCookBooksController@show');

Route::get('Recipe/{id}/edit', 'RecipeController@edit');
Route::post('Recipe/{id}/edit', 'RecipeController@update');

Route::get('Recipe/{id}/delete', 'RecipeController@destroy');

Route::get('Recipe/{id}/post', 'RecipeController@addToTryList');

Route::get('/Try', 'HomeController@showTryList');
Route::get('/MyRecipes', 'HomeController@showUserRecipes');
Route::get('/MyCookBooks', 'HomeController@showUserCookBooks');

//for searching recipes
Route::any ( '/search', function () {
    $q = Request::get ( 'q' );
    $return_recipe = Recipe::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'preparation', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $return_recipe ) > 0)
        return view ( 'welcome', ['allrecipes' =>  $return_recipe]);
    else
        return view ( 'welcome', ['allrecipes' =>  $return_recipe]);
} );


//for languange controller

Route::get('lang/{locale}','LanguageController');


//for user comments
Route::post('Recipe/comment', 'CommentController@store');

Route::resource('/admin/users', 'Admin\UserController', ['except' => ['show', 'create', 'store']])->middleware(['auth', 'auth.admin']);