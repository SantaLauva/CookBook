<?php

namespace App\Http\Controllers;

use App\Cookbook;
use App\RecipeInCookBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllCookBooksController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request, $id)
    {
        $rules = array(
            'title' => 'required|string|min:2|max:30',
            'description' => 'max:100'
        );        
        $this->validate($request, $rules);
        
        $cook = Cookbook::create([
            'title' => $request->title,
            'user_id' => Auth::User()->id,
            'description' => $request->description
        ]);
        
        RecipeInCookBook::create([
            'recipe_id' => $id,
            'cookbook_id' => $cook->id
        ]);
        
        return response([
                'message' => 'Data inserted successfully',
        ]);
    }
    
    public function storeRecipe(Request $request, $id) {
        RecipeInCookBook::create([
            'recipe_id' => $id,
            'cookbook_id' => $request->id
        ]);
        
        return redirect()->action('RecipeController@show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('AllCookBooks');
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
