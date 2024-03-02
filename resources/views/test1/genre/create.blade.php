@extends('layouts.test1.main')

@section('content')

    <h3>genre Create</h3>

<div><a href="{{ route('genres.index') }}">Index</a></div><br><br>

    <form method="post" action="{{ route('genres.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"/>
        </div><br>
        <button class="btn btn-success">Add</button>
    </form>

@endsection
