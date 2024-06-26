<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::with('actors')->get();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
{
    $actors = Actor::all();
    return view('admin.movies.create', compact('actors'));
}


public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'rating' => 'required|integer|between:0,100',
        'release_date' => 'required|date',
        'description' => 'required',
        'genres' => 'required',
        'main_image' => 'required|image',
        'other_images.*' => 'image',
        'actors' => 'required|array',
        'is_now_playing' => 'required|boolean'
    ]);

    $mainImagePath = $request->file('main_image')->store('images', 'public');

    $otherImagesPaths = [];
    if ($request->hasFile('other_images')) {
        foreach ($request->file('other_images') as $image) {
            $otherImagesPaths[] = $image->store('images', 'public');
        }
    }

    $movie = Movie::create([
        'title' => $request->title,
        'rating' => $request->rating,
        'release_date' => $request->release_date,
        'description' => $request->description,
        'genres' => $request->genres,
        'main_image' => $mainImagePath,
        'other_images' => $otherImagesPaths,
        'is_now_playing' => $request->is_now_playing
    ]);

    $movie->actors()->attach($request->actors);

    return redirect()->route('movies.index')->with('success', 'Movie created successfully.');
}

    public function edit(Movie $movie)
    {
        $actors = Actor::all();
        return view('admin.movies.edit', compact('movie', 'actors'));
    }

    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'title' => 'required',
            'rating' => 'required|integer|between:0,100',
            'release_date' => 'required|date',
            'description' => 'required',
            'genres' => 'required',
            'main_image' => 'image',
            'other_images.*' => 'image',
            'actors' => 'required|array',
            'is_now_playing' => 'required|boolean'
        ]);

        if ($request->hasFile('main_image')) {
            $mainImagePath = $request->file('main_image')->store('images', 'public');
            $movie->main_image = $mainImagePath;
        }

        if ($request->hasFile('other_images')) {
            $otherImagesPaths = array_map(function ($image) {
                return $image->store('images', 'public');
            }, $request->file('other_images'));
            $movie->other_images = $otherImagesPaths;
        }

        $movie->update([
            'title' => $request->title,
            'rating' => $request->rating,
            'release_date' => $request->release_date,
            'description' => $request->description,
            'genres' => $request->genres,
            'is_now_playing' => $request->is_now_playing
        ]);

        $movie->actors()->sync($request->actors);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
        {
            $movie->delete();
            return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
        }

    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    //Client side method
    public function indexClient()
    {
        $popularMovies = Movie::where('rating', '>', 70)->take(10)->get();
        $nowPlayingMovies = Movie::where('is_now_playing', true)->take(10)->get();
        return view('index', compact('popularMovies', 'nowPlayingMovies'));
    }

    public function showClient($id)
    {
        $movie = Movie::with('actors')->findOrFail($id);

        return view('show', ['movie' => $movie]);
    }

    public function allMovies()
    {
        $movies = Movie::with('actors')->get();
        return view('movies', compact('movies'));
        
    }
}
