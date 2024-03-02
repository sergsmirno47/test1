<?php

namespace App\Http\Controllers\Test1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test1\Genre\StoreRequest;
use App\Http\Requests\Test1\Genre\UpdateRequest;
use App\Models\Test1\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres  = Genre::orderByDesc('created_at')->get();

        return view('test1.genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test1.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $genre = Genre::make($request->validated());
        $genre->save();

        return redirect()->route('genres.show', $genre->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test1\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('test1.genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test1\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('test1.genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test1\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Genre $genre)
    {
        $data = $request->validated();
        $genre->update($data);

        return redirect()->route('genres.show', $genre->id)->with('success', 'genre Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test1\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect()->route('genres.index')->with('success', 'genre deleted');
    }
}
