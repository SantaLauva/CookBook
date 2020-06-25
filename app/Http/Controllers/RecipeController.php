<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Recipe;
use App\RecipeInCookBook;
use App\WantToMakeList;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function redirect;
use function view;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('AllRecipes', ['allrecipes' => Recipe::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('createRecipe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required|string|min:2|max:100',
            'description' => 'max:200',
            'prep' => 'required|string|max:10',
            'cook' => 'required|string|max:10',
            'difficulty' => 'required',
            'serves' => 'required|integer',
            'ingredients' => 'required|string|min:2|max:10000',
            'preparation' => 'required|string|min:2|max:10000',
            'image' => 'required|file|image|max:5000'
        );        
        $this->validate($request, $rules);
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        } else $path = NULL;
        
        $recipe = Recipe::create([
            'title' => $request->title,
            'user_id' => Auth::User()->id,
            'description' => $request->description,
            'prep' => $request->prep,
            'cook' => $request->cook,
            'difficulty' => $request->difficulty,
            'serves' => $request->serves,
            'ingredients' => $request->ingredients,
            'preparation' => $request->preparation,
            'image' => $path,
        ]);
        
        
        return redirect()->action('RecipeController@show', $recipe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {

        return view('Recipe', ['recipe' => Recipe::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        if (Auth::User()->id == $recipe->user_id)
            return view('editRecipe', ['recipe' => $recipe]);
        else return redirect()->action('RecipeController@show', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'title' => 'required|string|min:2|max:100',
            'description' => 'string|max:200',
            'prep' => 'required|string|max:10',
            'cook' => 'required|string|max:10',
            'difficulty' => 'required',
            'serves' => 'required|integer',
            'ingredients' => 'required|string|min:2|max:10000',
            'preparation' => 'required|string|min:2|max:10000',
            'image' => 'file|image|max:5000'
        );        
        $this->validate($request, $rules);
        
        $recipe = Recipe::find($id);
        
        $recipe->title = $request->title;
        $recipe->user_id = Auth::User()->id;
        $recipe->description = $request->description;
        $recipe->prep = $request->prep;
        $recipe->cook = $request->cook;
        $recipe->difficulty = $request->difficulty;
        $recipe->serves = $request->serves;
        $recipe->ingredients = $request->ingredients;
        $recipe->preparation = $request->preparation;
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $recipe->image = $path;
        }
        
        $recipe->save();
        
        return redirect()->action('RecipeController@show', $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        if (Auth::User()->id == $recipe->user_id) {
            Recipe::find($id)->delete();           
            WantToMakeList::where('recipe_id', '=', $id)->delete();
            RecipeInCookBook::where('recipe_id', '=', $id)->delete();
            Comment::where('recipe_id', '=', $id)->delete();
            return redirect()->action('RecipeController@index');
        }
        else return redirect()->action('RecipeController@show', $id);
    }
    
    public function addToTryList($id) {
        
        $p = WantToMakeList::where('recipe_id', '=', $id)->where('user_id', '=', Auth::User()->id)->get();
        if (count($p) == 0) {
            WantToMakeList::create ([
                'user_id' => Auth::User()->id,
                'recipe_id' => $id,
            ]);
        }
        return redirect()->action('RecipeController@show', $id);
    }

}
