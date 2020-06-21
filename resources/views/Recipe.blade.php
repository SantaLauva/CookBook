@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-sm">
        <div class="card">
            <h4 class="list-group-item list-group-item-primary">{{ $recipe->title }}</h4>
            <div class="card-body">
                <h5 class="card-text"> {{ $recipe->user->name }} </h5>
                <h5 class="card-text"> {{ $recipe->description }} </h5>
                <h5 class="card-text"> {{ $recipe->prep }} </h5>
                <h5 class="card-text"> {{ $recipe->cook }} </h5>
                <h5 class="card-text"> {{ $recipe->difficulty }} </h5>
                <h5 class="card-text"> {{ $recipe->serves }} </h5>
                <h5 class="card-text"> {{ $recipe->ingredients }} </h5>
                <h5 class="card-text"> {{ $recipe->preparation }} </h5>
            </div>
        </div>
    </div>
    
    @if ($recipe->image)
    <img src="{{ asset('storage/'.$recipe->image) }}" alt='picture'>
    @endif
</div>
@endsection

