@extends('layouts.app')
<link href="{{asset ('css/AllRecipes.css')}}" rel="stylesheet">

@section('content')

@yield('title')

<div class="recipegallery">
    @foreach($allrecipes as $recipe)
        <div class='recipe'>
            <a href="/Recipe/{{ $recipe->id }}">
                <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' height="250" width="300">
            </a>
            <div class="title">
                <h4>{{ $recipe->title }}</h4>
            </div>
        </div>
    @endforeach
</div>

@endsection