@extends('layouts.app')
    <head>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset ('css/createRecipe.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>

    
@section('content')
            
    <div style = "text-align: center">
        <h1>{{__('messages.Create Recipe')}}</h1>
    </div>

            <div class = "forma flex-center position-ref">
                <div>
                    {{ Form::open(array('action' => 'RecipeController@store', 'files' => true,)) }}   <!--array('action' => 'RecipeController@store', 'files' => true)-->
                    <div class="form group">
                        <div class="title">
                            <div>
                                {{ Form::label('title', __('messages.Title')) }}
                                {{ Form::text('title') }} 
                            </div>
                        </div>
                    </div>
                    <div class="form group">
                        <div>
                            {{ Form::label('image', __('messages.Picture')) }}
                            {{ Form::file('image',['class' => 'btn btn-default']) }}
                        </div>
                    </div>
                    <div class="description">
                        <div>  
                            {{ Form::label('description', __('messages.Description')) }}
                            {{ Form::textarea('description') }} 
                        </div>
                    </div>
                    <div>
                        {{ Form::label('prep', __('messages.Preparation Time')) }}
                        {{ Form::text('prep') }} 
                    </div>
                    <div>
                        {{ Form::label('cook', __('messages.Cooking Time')) }}
                        {{ Form::text('cook') }} 
                    </div>
                    <div>
                        {{ Form::label('difficulty', __('messages.Difficulty')) }}
                        {{ Form::select('difficulty', array('Easy' => __('messages.Easy'), 'Medium' => __('messages.Medium'), 'Hard' => __('messages.Hard')) )}}
                    </div>
                    <div>
                        {{ Form::label('serves', __('messages.Serves')) }}
                        {{ Form::text('serves') }}
                    </div>
                    <div>   
                        {{ Form::label('ingredients', __('messages.Ingredients')) }}
                        {{ Form::textarea('ingredients') }} 
                    </div>
                    <div>
                        {{ Form::label('preparation', __('messages.Preparation')) }}
                        {{ Form::textarea('preparation') }} 
                    </div>
                   
                    {!! Form::submit(__('messages.Create'), ['class' => 'btn btn-success']) !!}
                   
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
