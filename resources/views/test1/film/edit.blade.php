@extends('layouts.test1.main')

@section('content')

    <h3>genre Create</h3>

    <div><a href="{{ route('films.index') }}">Index</a></div><br><br>

    <form method="post" action="{{ route('films.update', $film->id) }}" enctype="multipart/form-data">
        @csrf
        @method('Patch')

        <div class="form-group">
            <label for="title">title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') ?? $film->title }}"/>
        </div><br>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Genres</label>
            </div>
            <select name="genre_id[]" class="custom-select" id="inputGroupSelect01" multiple size="{{ $genres->count() }}">
                @foreach($genres as $key=>$value)
                    <option  value="{{ $key }}" <?= in_array($key, $defaultGenres)? 'selected="selected"' : '' ?>>{{ $value }}</option>
                @endforeach
            </select>
        </div>
        @error('genre_id.*')
            <div class="alert alert-danger my-2">{{ $message }}</div>
        @enderror

        <br>
        <div class="form-group"><br>
            <label for="poster">poster IMG</label><br>
            <input name="url" type="file" class="form-control-file" id="poster" accept=".jpg"/><br>
        </div><br>

        <button class="btn btn-success">Add</button>
    </form>
    <div class="col-1 align-middle mt-lg-4">
        <label class="mt-5">film poster</label>
        <img style="width: 100px; height: 100px" src="/test/film/posters/{{ $film->url? $film->url : 'no-img.jpg' }} ">
    </div>

@endsection
