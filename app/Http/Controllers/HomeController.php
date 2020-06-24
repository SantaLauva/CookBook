<?php

namespace App\Http\Controllers;

use App\Cookbook;
use App\Recipe;
use App\WantToMakeList;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home', [
            'tryListRecipes' => Recipe::whereIn('id', WantToMakeList::where('user_id', '=', Auth::User()->id)->pluck('recipe_id'))->take(3)->get(),
            'recipes' => Recipe::where('user_id', '=', Auth::User()->id)->take(3)->get(),
            'cookbooks' => Cookbook::where('user_id', '=', Auth::User()->id)->take(3)->get()]);
    }
    
    public function showTryList() {
        return view('TryList', ['allrecipes' => Recipe::whereIn('id', WantToMakeList::where('user_id', '=', Auth::User()->id)->pluck('recipe_id'))->get()]);
    }
    
    public function showUserRecipes() {
        return view('UserRecipes', ['allrecipes' => Recipe::where('user_id', '=', Auth::User()->id)->get()]);
    }
    
    public function showUserCookBooks() {
        return view('UserCookBooks', ['allCookBooks' => CookBook::where('user_id', '=', Auth::User()->id)->get()]);
    }
}
