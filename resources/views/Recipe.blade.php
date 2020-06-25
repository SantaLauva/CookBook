@extends('layouts.app')

<link href="{{asset ('css/Recipe.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

@section('content')
<script type="application/javascript">
    function myfunction() {
        var z = document.getElementById("list").value;
        if (z == "new") {
            document.getElementById("createNew").style.display = "block";
            document.getElementById("addToList").style.display = "none";
        }
        else if (z != "") {
            document.getElementById("createNew").style.display = "none";
            document.getElementById("addToList").style.display = "block";
        }
        else {
            document.getElementById("createNew").style.display = "none";
            document.getElementById("addToList").style.display = "none";
        }
    }
    
</script>

<div class="inline">
    <div class="left">
        <div class="main">
            @if ($recipe->image)
            <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture' width="100%" height="auto">
            @endif

            <p class="h4">{{ $recipe->title }}</p>

            <p class="user"> By {{ $recipe->user->username }} </p>

            <div class="in-row">
                <div class="a">
                    <i class="material-icons">schedule</i> 
                    {{__('messages.PREP:')}} {{ $recipe->prep }} </div>
                <div class="a">
                    <i class="material-icons">history</i>
                    {{__('messages.COOK:')}} {{ $recipe->cook }} </div>
                <div class="a">
                    <i class="material-icons">construction</i>
                    {{ $recipe->difficulty }} </div>
                <div class="a">
                    <i class="material-icons">restaurant</i>
                    {{__('messages.SERVES')}} {{ $recipe->serves }} </div>
            </div>

            <div class="description"> {{ $recipe->description }} </div>
        </div>

        <div class="preparation">
            <h5>{{__('messages.Ingredients')}}:</h5>
            <pre class="ingredients" style="white-space: pre-wrap; word-break: keep-all;"> {{ $recipe->ingredients }} </pre>
            <h5>{{__('messages.Preparation')}}: </h5>
            <pre class="prep" style="white-space: pre-wrap; word-break: keep-all;"> {{ $recipe->preparation }} </pre>
        </div>
    </div>
    @if (Auth::User())
        <div class="right">

            <h5>{{__('messages.Add to CookBook')}}</h5>
            {{ Form::open(array('url' => 'Recipe/'.$recipe->id.'/add')) }}
            <select id="list" name="list" onchange="myfunction()">
                <option value="">{{__('messages.Select CookBook')}}</option>
                <option value="new">{{__('messages.Create new CookBook')}}</option>
                @if (session()->has('lists')) @foreach(session()->get('lists') as $L)
                <option value="{{ $L->id }}">{{ $L->title }}</option>
                @endforeach @endif
            </select><br>
            
            <div id="addToList" style="display: none;"><br>    
            {!! Form::submit(__('messages.Add'), ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
            
            <div id="createNew" style="display: none;">
                {{ Form::open(array('url' => 'Recipe/'.$recipe->id.'/new')) }}
                <div>   
                    {{ Form::label('title', __('messages.Title')) }}
                    {{ Form::text('title') }}   
                </div><div style="width: 50%;">  
                    {{ Form::label('description', __('messages.Description')) }}
                    {{ Form::textarea('description') }} 
                </div>
                <br>
                {!! Form::submit(__('messages.Create'), ['class' => 'btn btn-success newlistbutton']) !!}
                {!! Form::close() !!}
            </div>       

            @if(Auth::User()->id == $recipe->user_id)
                <h5>{{__('messages.Edit Recipe')}}</h5>
                <button type="button" id="edit" onclick="window.location='{{ action('RecipeController@edit', $recipe) }}'">{{__('messages.Edit')}}</button>
                <h5>{{__('messages.Delete Recipe')}}</h5>
                <button type="button" id="delete" onclick="window.location='{{ action('RecipeController@destroy', $recipe->id) }}'">{{__('messages.Delete')}}</button>
            @endif

            @if (session()->has('res'))
                <h5 id="show">{{__('messages.You want to make this recipe!')}}</h5>
            @else
                <h5 id="hide">{{__('messages.Do you want to try this recipe?')}}</h5>
                <button type="button" id="try" onclick="window.location='{{ action('RecipeController@addToTryList', $recipe->id) }}'">{{__('messages.Want To Try')}}</button>  
            @endif
        </div>
    @endif
</div>


<!-- Prieks komentariem -->


<div class="comments">
    <h3>{{ __('messages.Comments') }}</h3>  
    
    @if (Auth::check())
        <h5>{{ __('messages.Write your comment: ') }}</h5>
        
        {{ Form::open(array('action' => 'CommentController@store')) }}
        <div>   
            {{ Form::textarea('message') }}
            {{ Form::hidden('recipe_id', $recipe->id) }}  
        </div>
        <br>
        {!! Form::submit(__('messages.Comment'), ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
        
        <div>
            <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
            </ul>
        </div>
    @endif
    
    <div>{{$recipe->comments->count()}} {{str_plural('comment', $recipe->comments->count()) }}</div>
    <br><hr>
    
    @foreach ($recipe->comments->reverse() as $comment)
    <div class="coment">
        <pre>by: {{ $comment->user->username }}      at: {{$comment->created_at}}</pre>
        <p>{{ $comment->message }}</p>
        <hr>
    </div>
    @endforeach
</div>

@endsection

