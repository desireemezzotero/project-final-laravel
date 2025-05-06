<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        $genres = Genre::all();

        return view('welcome', compact('films', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newFilm = new Film();
        $data = $request->all();

        $newFilm->title_film = $data['title_film'];
        $newFilm->plot = $data['plot'];
        $newFilm->image = $data['image'];
        $newFilm->duration = $data['duration'];
        $newFilm->year = $data['year'];

        $newFilm->save();

        if ($request->has('genre')) {
            $newFilm->genres()->attach($data['genre']);
        };


        return redirect()->route('film.show', [$newFilm]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
