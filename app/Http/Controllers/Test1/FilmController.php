<?php

namespace App\Http\Controllers\Test1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test1\Film\PublishRequest;
use App\Http\Requests\Test1\Film\StoreRequest;
use App\Http\Requests\Test1\Film\UpdateRequest;
use App\Models\Test1\Film;
use App\Models\Test1\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::orderByDesc('created_at')->paginate(10);

        return view('test1.film.index', compact('films'));
    }

    public function publish(Film $film)
    {
        $film->update(['status'=>1]);
        return redirect()->route('films.index')->with('success', 'Film published');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::orderBy('title')->pluck('title', 'id');

        return view('test1.film.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = collect($request->validated());
        $film_data = $data->except('genre_id')->toArray();

        if($request->file('url'))
        {
            $film_data['url'] = time() . '-' . $request->file('url')->getClientOriginalName();
            if(!$request->file('url')->move(public_path('/test/film/posters/'), $film_data['url']))
            {
                return redirect()->back()->with('alert', 'something wrong with file((');
            }
        }

        $film = Film::create($film_data);
        $film->genres()->sync($data->get('genre_id'));

        return redirect()->route('films.show', $film->id)->with('success', 'Film added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test1\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('test1.film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test1\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        $genres = Genre::orderBy('title')->pluck('title', 'id');

        $defaultGenres = $film->genres()->pluck('genre_id')->toArray();
//        dd($defaultGenres);

        return view('test1.film.edit', compact('film', 'genres', 'defaultGenres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test1\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Film $film)
    {
        $data = collect($request->validated());

        $film_data = $data->except('genre_id')->toArray();

        if($request->hasFile('url'))
        {
            $film_data['url'] = time() . '-' . $request->file('url')->getClientOriginalName();
            if(!$request->file('url')->move(public_path('/test/film/posters/'), $film_data['url']))
            {
                return redirect()->back()->with('alert', 'something wrong with file((');
            }
        }

        $film->update($film_data);
        $film->genres()->sync($data->get('genre_id'));

        return redirect()->route('films.show', $film->id)->with('success', 'film updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test1\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index')->with('success', 'film deleted');
    }
}
