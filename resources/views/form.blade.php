@extends('layouts.app')

@section('content')
    <form class="container" action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <label class="form-label">thumb</label>
            <input type="text" class="form-control" name="thumb">
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">series</label>
            <input type="text" class="form-control" name="series">
        </div>
        <div class="mb-3">
            <label class="form-label">type</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="mb-3">
            <label class="form-label">sale_date</label>
            <input type="text" class="form-control" name="sale_date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
