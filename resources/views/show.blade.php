@extends('layouts.app')

@section('content')
    <div class="flex">
        <div class="card">
            <h1> {{ $comic->title }}</h1>
            <div class="img-container"><img src="{{ $comic->thumb }}" alt=""></div>
            <div><span>Price:</span> {{ $comic->price }}</div>
            <div><span>Sale date:</span> {{ $comic->sale_date }}</div>
            <div><span>Type:</span> {{ $comic->type }}</div>
            <div><span>Series:</span> {{ $comic->series }}</div>
            <div><span>Plot:</span> {{ $comic->description }}</div>
        </div>
    </div>
@endsection
