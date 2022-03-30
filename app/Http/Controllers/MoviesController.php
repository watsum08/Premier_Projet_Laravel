<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;

class MoviesController extends Controller
{
    public function getAll() {
        $movies = movies::all();
        return view ('welcome', ['movies' => $movies]);
    }

    public function create() {
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'year' => ['required'],
        ]);

        $title = request('title');
        $year = request('year');

        $movie = Movies::create([
            'titre' => $title,
            'annee' => $year,
        ]);

        return redirect('/');
    }
}