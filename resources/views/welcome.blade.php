@extends('layouts.app')

        <link href="{{asset ('css/welcomePage.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    {{ __('messages.CookBook') }}
                </div>

<!--new search bar-->
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search for a recipe"> 
            <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<h3 class="recipes_tile">{{__('messages.Latest User recipes')}}</h3>

@if(count($allrecipes)> 0 )
            
    <div class="container ">
        <div class="row">
            <div class="welcome_recipe_gallery">
                @foreach($allrecipes as $recipe)
                    <div class='recipe'>
                        <a href="/Recipe/{{ $recipe->id }}">
                        <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' height="250" width="300">
                        <div class="title">
                            <h4>{{ $recipe->title }}</h4>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>       

@else
    <div>
        <h3>Nothing found!</h3>
    </div>

<div>
    <h3>{{__('messages.Nothing found!')}}</h3>
</div>

@endif   
   
@endsection