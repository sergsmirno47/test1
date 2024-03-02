@extends('layouts.test1.main')

@section('content')

    <h3>genre Update</h3>

    <div><a href="{{ route('genres.index') }}">Index</a></div><br><br>

    <form method="post" action="{{ route('genres.update', $genre->id) }}">
        @csrf
        @method('Patch')
        <div class="form-group">
            <label for="title">title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') ?? $genre->title }}"/>
        </div><br>
        <button class="btn btn-success">Update</button>
    </form>

@endsection
