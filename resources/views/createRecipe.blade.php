@extends('layouts.app')
@section('content')

            <div>
                <h1>Create Recipe</h1>
            </div>
            
            <div>
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

@endsection
