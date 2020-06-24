@extends('layouts.app')

<link href="{{asset ('css/AllCookBooks.css')}}" rel="stylesheet">

@section('content')
<h1>Your CookBooks</h1>

<div class='main'>
    @foreach ($allCookBooks as $CookBook)
        <div class='box'>
            <a href="/CookBook/{{ $CookBook->id }}">
                <div class='cont'>
                    <h4>{{ $CookBook->title }}</h4>
                    <p>{{ $CookBook->description }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>

@endsection