@extends('layouts.app')

<<<<<<< HEAD
            <div>
=======
    <head>
>>>>>>> 76e1b6adaf7a95c28dd4af18b2248561a9612800
        <title>CookBook</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset ('css/createRecipe.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    
@section('content')
            
    <div style = "text-align: center">
        <h1>Create Recipe</h1>
    </div>

<<<<<<< HEAD
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div style = "text-align: center">
                <h1>Create Recipe</h1>
            </div>
          
            
            <div>
=======
>>>>>>> 76e1b6adaf7a95c28dd4af18b2248561a9612800
            <div class = "forma flex-center position-ref">
                <div>
                    {{ Form::open(array('action' => 'RecipeController@store', 'files' => true,)) }}   <!--array('action' => 'RecipeController@store', 'files' => true)-->
                    <div class="form group">
                    <div class="title">
                    <div>
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title') }} 
                    </div>
                    </div>
                    </div>
                    <div class="form group">
                    <div>
                        {{ Form::label('image', 'Picture') }}
                        {{ Form::file('image',['class' => 'btn btn-default']) }}
                    </div>
                    </div>
                    <div class="description">
                    <div>  
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description') }} 
                    </div>
                    </div>
                    <div>
                        {{ Form::label('prep', 'Preparation Time') }}
                        {{ Form::text('prep') }} 
                    </div>
                    <div>
                        {{ Form::label('cook', 'Cooking Time') }}
                        {{ Form::text('cook') }} 
                    </div>
                    <div>
                        {{ Form::label('difficulty', 'Difficulty') }}
                        {{ Form::select('difficulty', array('Easy' => 'Easy', 'Medium' => 'Medium', 'Hard' => 'Hard')) }}
                    </div>
                    <div>
                        {{ Form::label('serves', 'Serves') }}
                        {{ Form::text('serves') }}
                    </div>
                    <div>   
                        {{ Form::label('ingredients', 'Ingredients') }}
                        {{ Form::textarea('ingredients') }} 
                    </div>
                    <div>
                        {{ Form::label('preparation', 'Preparation') }}
                        {{ Form::textarea('preparation') }} 
                    </div>
                   
                    {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}
                   
                    {!! Form::close() !!}
                   
                </div>
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
<<<<<<< HEAD

=======
>>>>>>> 76e1b6adaf7a95c28dd4af18b2248561a9612800

@endsection
