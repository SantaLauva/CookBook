@extends('layouts.app')
<link href="{{asset ('css/Recipe.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@section('content') 
<div class="inline">
    <div class="left">
        <div class="main">
            @if ($recipe->image)
            <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' width="100%" height="auto">
            @endif

            <p class="h4">{{ $recipe->title }}</p>

            <p class="user"> By {{ $recipe->user->username }} </p>

            <div class="in-row">
                <div class="a">
                    <i class="material-icons">schedule</i> 
                    PREP: {{ $recipe->prep }} </div>
                <div class="a">
                    <i class="material-icons">history</i>
                    COOK: {{ $recipe->cook }} </div>
                <div class="a">
                    <i class="material-icons">construction</i>
                    {{ $recipe->difficulty }} </div>
                <div class="a">
                    <i class="material-icons">restaurant</i>
                    SERVES {{ $recipe->serves }} </div>
            </div>

            <div class="description"> {{ $recipe->description }} </div>
        </div>

        <div class="preparation">
            <h5>Ingredients: </h5>
            <pre class="ingredients" style="white-space: pre-wrap; word-break: keep-all;"> {{ $recipe->ingredients }} </pre>
            <h5>Preparation: </h5>
            <pre class="prep" style="white-space: pre-wrap; word-break: keep-all;"> {{ $recipe->preparation }} </pre>
        </div>
    </div>
    
    <div class="right">
    
        <h5>Add to CookBook</h5>

        @if(Auth::User()->id == $recipe->user_id)
            <h5>Edit Recipe</h5>
            <button type="button" id="edit" onclick="window.location='{{ action('RecipeController@edit', $recipe) }}'">Edit</button>
            <h5>Delete Recipe</h5>
            <button type="button" id="delete" onclick="window.location='{{ action('RecipeController@destroy', $recipe->id) }}'">Delete</button>
        @endif
        
        @if (session()->has('res'))
        <h5 id="show"> You want to make this recipe!</h5>
        
        @else
        <h5 id="hide">Do you want to try this recipe?</h5>
        <button type="button" id="try" onclick="window.location='{{ action('RecipeController@addToTryList', $recipe->id) }}'">Want To Try</button>  
        @endif
    </div>
</div>


<!-- Prieks komentariem -->
<div class="Comments">

</div>
@endsection

