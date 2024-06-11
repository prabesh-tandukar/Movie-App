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
        return view('admin.movies.index', compact('actors'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'rating' => 'required|integer|between:0,100',
            'release_date' => 'required|date',
            'description' => 'required',
            'main_image' => 'requried|image',
            'other_images' => 'image',
            'actors' => 'Required|array'
        ]);

        $mainImagePath = $request->file('main_image')->store('images');
        $otherImagesPaths = $request->file('other_images') ? array_map(function($image) {
            return $image->store('images');
        }, $request->file('other_images')) : [];

        $movie = Movie::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'release_date' => $request->release_date,
            'description' => $request->description,
            'main_image' => $mainImagePath,
            'other_images' => $otherImagesPaths
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
            'main_image' => 'image',
            'other_images.*' => 'image',
            'actors' => 'required|array'
        ]);

        if ($request->hasFile('main_image')) {
            $mainImagePath = $request->file('main_image')->store('images');
            $movie->main_image = $mainImagePath;
        }

        if ($request->hasFile('other_images')) {
            $otherImagesPaths = array_map(function ($image) {
                return $image->store('images');
            }, $request->file('other_images'));
            $movie->other_images = $otherImagesPaths;
        }

        $movie->update([
            'title' => $request->title,
            'rating' => $request->rating,
            'release_date' => $request->release_date,
            'description' => $request->description,
        ]);

        $movie->actors()->sync($request->actors);

        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destory(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully');
    }
}
