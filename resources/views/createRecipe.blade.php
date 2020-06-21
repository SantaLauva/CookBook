<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CookBook</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Account</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div style = "text-align: center">
                <h1>Create Recipe</h1>
            </div>
            
            <div class = "flex-center position-ref">
                <div>
                    {{ Form::open(array('action' => 'RecipeController@store', 'files' => true)) }}   <!--array('action' => 'RecipeController@store', 'files' => true)-->
                    <div>
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title') }} 
                    </div><div>
                        {{ Form::label('image', 'Picture') }}
                        {{ Form::file('image') }}
                    </div><div>  
                        {{ Form::label('description', 'Description') }}
                        {{ Form::textarea('description') }} 
                    </div><div>
                        {{ Form::label('prep', 'Preparation Time') }}
                        {{ Form::text('prep') }} 
                    </div><div>
                        {{ Form::label('cook', 'Cooking Time') }}
                        {{ Form::text('cook') }} 
                    </div><div>
                        {{ Form::label('difficulty', 'Difficulty') }}
                        {{ Form::select('difficulty', array('Easy' => 'Easy', 'Medium' => 'Medium', 'Hard' => 'Hard')) }}
                    </div><div>
                        {{ Form::label('serves', 'Serves') }}
                        {{ Form::text('serves') }}
                    </div><div>   
                        {{ Form::label('ingredients', 'Ingredients') }}
                        {{ Form::textarea('ingredients') }} 
                    </div><div>
                        {{ Form::label('preparation', 'Preparation') }}
                        {{ Form::textarea('preparation') }} 
                    </div>
                    {!! Form::submit('Create') !!}
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
            

                
            </div>
        </div>
    </body>
</html>
