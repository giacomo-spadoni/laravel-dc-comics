@extends('layouts.app')

@section('content')
    <div class="flex">
        @foreach ($comics as $fumetto)
            <div class="card">
                <h1> {{ $fumetto->title }}</h1>
                <div class="img-container"><img src="{{ $fumetto->thumb }}" alt=""></div>
                <div><span>Price:</span> {{ $fumetto->price }}</div>
                <div><span>Sale date:</span> {{ $fumetto->sale_date }}</div>
                <div><span>Type:</span> {{ $fumetto->type }}</div>
                <div><span>Series:</span> {{ $fumetto->series }}</div>
                <div><span>Plot:</span> {{ $fumetto->description }}</div>
            </div>
        @endforeach
    </div>
@endsection
