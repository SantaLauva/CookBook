@extends('layouts.app')
<link href="{{asset ('css/Account.css')}}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your CookBooks</div>
                
                <div class="recipegallery">
                    @foreach ($cookbooks as $cookbook)               
                        <div class='recipe' style="height: 130px; width: 180px;">
                            <a href="/CookBook/{{ $cookbook->id }}">
                                <div class='cont' style="height: 130px; width: 180px; text-align: center; margin: 20px 0px;">
                                    <h4>{{ $cookbook->title }}</h4>
                                    <p>{{ $cookbook->description }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                
                @if (count($cookbooks) == 0) 
                <div class="card-body">
                    You don't have any CookBook...
                </div>
                @endif
                
                <div class="link"><a href="/Try">More</a></div>
                
            </div> <br>
            
            <div class="card">
                <div class="card-header">In your Want To Try List</div>
                
                <div class="recipegallery">
                @foreach ($tryListRecipes as $recipe)
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
                
                @if (count($tryListRecipes) == 0) 
                <div class="card-body">
                    There is nothing you want to try...
                </div>
                @endif
                
                <div class="link"><a href="/Try">More</a></div>
            </div> <br>
            
            <div class="card">
                <div class="card-header">Your Recipes</div>

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
                    You haven't added any recipe...
                </div>
                @endif
                
                <div class="link"><a href="/MyRecipes">More</a></div>
                
            </div>
            
        </div>
    </div>
</div>
@endsection
