<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Cookbook;
use App\Http\Controllers\Controller;
use App\Recipe;
use App\RecipeInCookBook;
use App\Role;
use App\User;
use App\WantToMakeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Users', ['users' => User::all()]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         if (Auth::user()->id == $id) {
             return view('Users', ['users' => User::all()]);
         }
        return view('UserEdit', ['user' => User::find($id),
                                'roles' => Role::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->id == $id) {
             return view('Users', ['users' => User::all()]);
         }
        $user = User::find($id);
        $user->roles()->sync($request->roles);
        
        return view('Users', ['users' => User::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
             return view('Users', ['users' => User::all()]);
        }
        $user = User::find($id);
        
        if ($user) {
            $user->roles()->detach();
            
            $usercookbooks = Cookbook::where('user_id', '=', $id)->get()->pluck('id');
            $userrecipes = Recipe::where('user_id', '=', $id)->get()->pluck('id');
            
            foreach ($usercookbooks as $u) {
                RecipeInCookBook::where('cookbook_id', $u)->delete();
            }
            
            foreach ($userrecipes as $r) {
                RecipeInCookBook::where('recipe_id', $r)->delete();
                Comment::where('recipe_id', '=', $r)->delete();
                WantToMakeList::where('recipe_id', $r)->delete();
            }
            
            Comment::where('user_id', '=', $id)->delete();
            WantToMakeList::where('user_id', '=', $id)->delete();
            Recipe::where('user_id', '=', $id)->delete();
            Cookbook::where('user_id', '=', $id)->delete();
            
            $user->delete();
        }
        
        return view('Users', ['users' => User::all()]);
    }
}
