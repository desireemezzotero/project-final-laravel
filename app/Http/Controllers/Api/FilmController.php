<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::with('genres')->get();

        return response()->json(
            [
                "success" => 'true',
                "data" => $films
            ]
        );
    }

    public function show(Film $film)
    {
        $film->load('genres');
        return response()->json(
            [
                "success" => 'true',
                "data" => $film
            ]
        );
    }
}
