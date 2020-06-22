@extends('layouts.app')
@section('content')


<h1>All Recipes</h1>


    @foreach($allrecipes as $recipe)
        <div>
            <h2>{{ $recipe->title }}</h2>
        </div>
    <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' height="250" width="300">
    @endforeach

@endsection