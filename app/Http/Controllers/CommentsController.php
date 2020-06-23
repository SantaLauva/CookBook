<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest; 

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(CommentRequest $request)
    {
        $recipes = Recipe::findOrFail($request->recipe_id);
 
        Comment::create([
            'message' => $request->message,
            'user_id' => Auth::User()->id,
            'recipe_id' => $id
        ]);
        return redirect()->route('recipes.show', $recipes->id);
    }
}
