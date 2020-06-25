@extends('layouts.app')
<link href="{{asset ('css/AllRecipes.css')}}" rel="stylesheet">

@section('content')
<h1>{{__('messages.Recipes in ')}}{{ $title }}</h1>

<div class="recipegallery">
    @foreach($allrecipes as $recipe)
        <div class='recipe'>
            <a href="/Recipe/{{ $recipe->recipe_id }}">
                <img src="{{ asset('storage/'.$recipe->recipe->image) }}" alt='picture' height="250" width="300">
            </a>
            <div class="title">
                <h4>{{ $recipe->recipe->title }}</h4>
            </div>
        </div>
    @endforeach
</div>

@endsection