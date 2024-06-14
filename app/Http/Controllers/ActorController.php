<?php

namespace App\Http\Controllers;

use App\Models\Actor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActorController extends Controller
{

    public function index()
    {
        $actors = Actor::all();
        return view('admin.actors.index', compact('actors'));
    }

    public function create()
    {
        return view('admin.actors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Actor::create([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'description' => $request->description,
            'image' => $path,
        ]);

        return redirect()->route('actors.index');
    }

    public function show(Actor $actor)
    {
        return view('admin.actors.show', compact('actor'));
    }

    public function edit(Actor $actor)
    {
        return view('admin.actors.edit', compact('actor'));
    }

    public function update(Request $request, Actor $actor)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $actor->image = $path;
        }

        $actor->update($request->all());

        return redirect()->route('actors.index');
    }

    public function destroy(Actor $actor)
    {
        $actor->delete();
        return redirect()->route('actors.index');
    }

    public function indexActor()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }
    public function viewActor($id)
    {
        $actor = Actor::findOrFail($id);

        return view('actors.view', compact('actor'));
    }

}
