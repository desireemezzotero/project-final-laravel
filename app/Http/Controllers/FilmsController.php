<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $newFilm->duration = $data['duration'];
        $newFilm->year = $data['year'];

        if (array_key_exists('image', $data)) {
            $img = Storage::putFile('image_url', $data['image']);
            $newFilm->image = $img;
        }

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
    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('modify', compact('genres', 'film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $data = $request->all();

        $film->title_film = $data['title_film'];
        $film->plot = $data['plot'];
        $film->duration = $data['duration'];
        $film->year = $data['year'];


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Elimina l'immagine precedente se esiste
            if ($film->image && Storage::exists($film->image)) {
                Storage::delete($film->image);
            }

            // Salva la nuova immagine
            $path = $request->file('image')->store('image_url', 'public');
            $film->image = $path;
        }

        $film->update();


        if ($request->has('genre')) {
            $film->genres()->sync($data['genre']);
        } else {
            $film->genres()->detach();
        };


        return redirect()->route('film.show', $film);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->genres()->detach();
        $film->delete();
        return redirect()->route('film.index');
    }
}
