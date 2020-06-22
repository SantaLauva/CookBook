@extends('layouts.app');

        <link href="{{asset ('css/welcomePage.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    CookBook
                </div>

                <nav class="navbar navbar-light d-flex justify-content-center">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                </nav>

   <!--Retrieve user recipes-->
            <h3 class="recipes_tile">Latest User recipes</h3>
            <div class="container ">
            <div class="row">
                <div class="welcome_recipe_gallery">
                    @foreach($allrecipes->reverse() as $recipe)
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
         
</div>
   




@endsection