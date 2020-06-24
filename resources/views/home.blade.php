@extends('layouts.app')
<link href="{{asset ('css/Account.css')}}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your CookBooks</div>

                <div class="card-body">
                    Here will be listed your CookBooks
                </div>
                
            </div> <br>
            
            <div class="card">
                <div class="card-header">In your Want To Try List</div>
                
                <div class="recipegallery">
                @foreach ($recipes as $recipe)
                    <div class='recipe'>
                        <a href="/Recipe/{{ $recipe->id }}">
                            <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' height="130" width="180">
                        </a>
                        <div class="title">
                            <h6>{{ $recipe->title }}</h6>
                        </div>
                    </div>
                @endforeach
                </div>
                
                @if (count($recipes) == 0) 
                <div class="card-body">
                    There is nothing you want to try...
                </div>
                @endif
                
                <div class="link"><a href="/Try">More</a></div>
            </div> <br>
            
            <div class="card">
                <div class="card-header">Your Recipes</div>

                <div class="card-body">
                    Here will be listed Recipes you added
                </div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection
