@extends('layouts.test1.main')

@section('content')
    <h3>genre Index</h3>

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
        <p><a href="{{ route('genres.create') }}">Create</a></p>
    </div>



    @foreach($genres as $genre)

        <div class="container">
            <div class="row mb-3 p-3" style="border: solid #dee2e6;border-width: 1px;">
                <div class="col-9 align-middle">
                    <div>title: {{ $genre->title }}</div>
                </div>
                <div class="col-1 text-center align-middle">
                    <a href="{{ route('genres.show', $genre->id) }}">Show</a>
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
        </div>

    @endforeach

@endsection
