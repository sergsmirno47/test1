@extends('layouts.test1.main')

@section('content')

    <div class="row mb-3 p-3" style="border: solid #dee2e6;border-width: 1px;">
		<p><a href="{{ route('films.index') }}" class="link-success">Films</a></p><br>
		<p><a href="{{ route('genres.index') }}" class="link-success">Genres</a></p><br>
    </div>


@endsection
