@extends('layouts.test1.main')

@section('content')
    <h3>genre Show</h3>

    @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('success') }}</li>
            </ul>
        </div>
    @endif

    @if (Session::has('alert'))
        <div class="alert alert-danger">
            <ul>
                <li>{{ Session::get('alert') }}</li>
            </ul>
        </div>
    @endif

    <div class="row mb-3 p-3" style="border: solid #dee2e6;border-width: 1px;">
        <p><a href="{{ route('genres.index') }}">Index</a></p>
    </div>


    <div class="container">
        <div class="row mb-3 p-3" style="border: solid #dee2e6;border-width: 1px;">
            <div class="col-9 align-middle">
                <div>title: {{ $genre->title }}</div>
            </div>
            <div class="col-1 text-center align-middle">
                <a href="{{ route('genres.edit', $genre->id) }}">Edit</a>
            </div>

            <div class="col-1 text-center align-middle">
                <form method="post" action="{{ route('genres.destroy', $genre->id) }}">
                    @csrf
                    @method('Delete')
                    <button class="btn btn-danger">DELETE</button>
                </form>
            </div>

        </div>

        <br><br><h3>Films</h3><br><br>

        @foreach($genre->films as $film)

            <div class="container">
                <div class="row mb-3 p-3" style="border: solid #dee2e6;border-width: 1px;">
                    <div class="col-1 align-middle">
                        <img style="width: 50px; height: 50px" src="/test/film/posters/{{ $film->url? $film->url : 'no-img.jpg' }} ">
                    </div>

                    <div class="col-7 align-middle">
                        <div>title: {{ $film->title }}</div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection
