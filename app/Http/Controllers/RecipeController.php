<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        //
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
            'description' => 'string|max:200',
            'prep' => 'required|string|max:10',
            'cook' => 'required|string|max:10',
            'difficulty' => 'required',
            'serves' => 'required',
            'ingredients' => 'required|string|min:2|max:10000',
            'preparation' => 'required|string|min:2|max:10000',
            'image' => 'file|image|max:5000'
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
    public function show($id)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
