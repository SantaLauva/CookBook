@extends('layouts.app')
@section('content')


<h1>All Recipes</h1>


    @foreach($allrecipes as $recipe)
        <div class='recipe'>
            <div class='image'>
                <a href="/Recipe/{{ $recipe->id }}">
                    <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' height="250" width="300">
                </a>
            </div>
            <h2>{{ $recipe->title }}</h2>
        </div>
    @endforeach

@endsection